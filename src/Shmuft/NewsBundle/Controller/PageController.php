<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 07.12.16
 * Time: 22:47
 */

namespace Shmuft\NewsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Shmuft\NewsBundle\Form\NewsType;
use Shmuft\NewsBundle\Entity\News;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    public function indexAction($current_page_news = 1){
        $news = $this->getDoctrine()->getRepository("ShmuftNewsBundle:News")->getAllNews($current_page_news);
        $count_pages = ceil($this->getDoctrine()->getRepository("ShmuftNewsBundle:News")->getCountNews()/5);

        return $this->render('ShmuftNewsBundle:Page:layout.html.twig', array(
            'news' => $news,
            'count_pages' => $count_pages,
            'current_page_news' => $current_page_news,
        ));
    }

    public function showAction($slug){
        $em = $this->getDoctrine()->getManager();
        $one_news = $em->getRepository('ShmuftNewsBundle:News')->findOneBy(array('slug' => $slug));
        return $this->render('ShmuftNewsBundle:Page:show.html.twig', array(
            'one_news' => $one_news,
        ));
    }

    public function newAction(){
        $new_news = new News();

        $form = $this->createForm(NewsType::class, $new_news);

        return $this->render('@ShmuftNews/Page/create.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function createAction(Request $request){

        $new_news = new News();

        $form = $this->createForm(NewsType::class, $new_news);

        $form->handleRequest($request);

        if ($request->isMethod($request::METHOD_POST)){
            if ($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($new_news);
                $em->flush();
                return $this->redirect($this->generateUrl('shmuft_news_show', array('slug' => $new_news->getSlug())));
            }
        }

        return $this->render('ShmuftNewsBundle:Page:create.html.twig', array(
            'form' => $form->createView(),
        ));

    }
}