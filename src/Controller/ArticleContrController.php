<?php

namespace App\Controller;

use App\Entity\Like;
use App\Entity\LikeArtic;
use App\Entity\Message;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article ;
use App\Entity\User ;

use Doctrine\ORM\EntityManagerInterface;

class ArticleContrController extends AbstractController
{
    /**
     * @Route("/article/contr", name="app_article_contr")
     */
    public function index(): Response
    {
        return $this->render('article_contr/index.html.twig', [
            'controller_name' => 'ArticleContrController',
        ]);
    }

    /**
     * @Route("/backoffice", name="backoffice")
     */
    public function backoffice(): Response
    {
        return $this->render('article_contr/backoffice.html.twig', [
            'controller_name' => 'ArticleContrController',
        ]);
    }

    /**
     * @Route("/article_contr", name="article_cont")z
     */
    public function indexAdmin(): Response
    { $user=$this->getDoctrine()->getManager()->getRepository(User::class)->find(14);

        $likes = $this->getDoctrine()->getManager()->getRepository(LikeArtic::class)->findAll();

      /*  $likes = $this->getDoctrine()->getManager()->getRepository(Like::class)->createQueryBuilder('l')
            ->where('l.idlike like :idlike')
            ->setParameter('idlike','0')
            ->getQuery()
            ->getResult();
      */
        ;
        $articles = $this->getDoctrine()->getManager()->getRepository(Article::class)->findAll();
        return $this->render('article_contr/act.html.twig', [
            'controller_name' => 'ArticleContrController', 'articles' => $articles,'user'=>$user,'likes'=>$likes
        ]);
    }

    /**
     * @Route("/article_contr/likeadd{id}", name="postlike")
     */
public function like($id):
    Response
    {
        $likes = $this->getDoctrine()->getManager()->getRepository(LikeArtic::class)->findAll();
        $manager=$this->getDoctrine()->getManager();
        $article=$this->getDoctrine()->getManager()->getRepository(Article::class)->find($id);
        $user=$this->getDoctrine()->getManager()->getRepository(User::class)->find(14);
        if ($article->isLikedByUser($user,$likes)) {
            $like = $this->getDoctrine()->getManager()->getRepository(LikeArtic::class)->findOneBy([
                'idArticle' => $article,
                'idUser' => $user
            ]);
            $manager->remove($like);
            $manager->flush();
            return $this->json([
                'code' => 200,
                'message' => 'like bien supprimé',
                'likes' => $this->getDoctrine()->getManager()->getRepository(LikeArtic::class)->count(['idArticle' => $article])

            ], 200);
        }


        $like=new LikeArtic();
        $like->setIdArticle($article)
            ->setIdUser($user);
        $manager->persist($like);
        $manager->flush();
        return $this->json(['code' => 400, 'message' => 'like bien ajouté', 'likes' => $this->getDoctrine()->getManager()->getRepository(LikeArtic::class)->count(['idArticle' => $article])], 200);

    }

}
