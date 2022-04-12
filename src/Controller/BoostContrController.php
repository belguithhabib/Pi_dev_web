<?php

namespace App\Controller;

use App\Form\BlogType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Boost ;
use Doctrine\ORM\EntityManagerInterface;



class BoostContrController extends AbstractController
{
    /**
     * @Route("/", name="boosts")
     */
    public function index(): Response
    {
        $boosts= $this->getDoctrine()->getManager()->getRepository(Boost::class)->findAll();
        return $this->render('boost_contr/index.html.twig', [
            'boosts'=>$boosts
        ]);
    }

    /**
     * @Route("/boost/add", name="boost_contr")
     * Method({"GET", "POST"})
     */
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {

        $boost = new boost();


        $form = $this->createForm(BlogType::class, $boost);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->persist($boost);
                $entityManager->flush();

                return $this->redirectToRoute('boosts');
            }
        return $this->render('boost_contr/creaBoost.html.twig',['form' => $form->createView()]);
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
}
