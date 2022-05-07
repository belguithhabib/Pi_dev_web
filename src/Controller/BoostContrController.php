<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\BlogType;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Boost ;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\TheChoiceType;
use Dompdf\Dompdf;
use Dompdf\Options;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class BoostContrController extends AbstractController
{
    /**
     * @Route("/", name="boosts")
     */
    public function index(): Response
    {
        $boosts= $this->getDoctrine()->getManager()->getRepository(Boost::class)->findAll();
        return $this->render('article_contr/backoffice.html.twig', [
            'boosts'=>$boosts
        ]);
    }

    /**
     * @Route("/boost/add", name="boost_contr")
     * Method({"GET", "POST"})
     */
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $articles= $this->getDoctrine()->getManager()->getRepository(Article::class)->findAll();
        $boost = new boost();



        $form = $this->createForm(BlogType::class, $boost);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $idArticle=(int)$request->request->get('articles');
            $article=$this->getDoctrine()->getRepository(Article::class)->find($idArticle);
            $boost->setIdarticle($article);
                $entityManager->persist($boost);
                $entityManager->flush();

                return $this->redirectToRoute('boosts');
            }
        return $this->render('boost_contr/creaBoost.html.twig',['form' => $form->createView(),'articles'=>$articles]);
    }
    /**
     * @Route("/removeBoost/{idBoost}", name="supp_boost")
     */
    public function suppressionBoost(Boost $boost): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($boost);
        $em->flush();

        return $this->redirectToRoute('boosts');
    }
    /**
     * @Route("/modifBoost/{idBoost}", name="modifBoost")
     */
    public function modifBoost(Request $request,$idBoost): Response
    {
        $boost = $this->getDoctrine()->getManager()->getRepository(Boost::class)->find($idBoost);
        $form = $this->createForm(BlogType::class, $boost);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('boosts');
        }
        return $this->render('boost_contr/updBoost.html.twig',['f'=>$form->createView()]);
    }

    /**
     * @Route("/payementBoost", name="payement")
     */
    public function payement(): Response
    {
        return $this->render('boost_contr/payement.html.twig',[
            'controller_name'=> 'BoostContrController'
        ]);
    }
    /**
     * @Route("/checkout", name="checkout")
     */
    public function checkout($stripeSK): Response
    {

        Stripe::setApiKey($stripeSK);
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items'           => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            'name' => 'T-shirt',
                        ],
                        'unit_amount'  => 2000,
                    ],
                    'quantity'   => 1,
                ]
            ],
            'mode'                 => 'payment',
            'success_url'          => $this->generateUrl('success-url', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url'           => $this->generateUrl('cancel-url', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);

        return $this->redirect($session->url, 303);
    }
    /**
     * @Route("/success-url", name="success-url")
     */

    public function successUrl(): Response
    {
        return $this->render('boost_contr/success.html.twig', []);
    }

    /**
     * @Route("/cancel-url", name="cancel-url")
     */
      public function cancelUrl(): Response
    {
        return $this->render('boost_contr/cancel.html.twig', []);
    }


    /**
     * @Route("/pdfBoost", name="pdfBoost")
     */
    public function pdfAction()
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
        $boosts= $this->getDoctrine()->getManager()->getRepository(Boost::class)->findAll();
        $html = $this->renderView('article_contr/pdf.html.twig', array(
            'boosts'=>$boosts
        ));

        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);


    }
}
