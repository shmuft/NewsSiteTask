<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 07.12.16
 * Time: 22:47
 */

namespace Shmuft\NewsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

    public function showAction($news_id){
        $em = $this->getDoctrine()->getManager();
        $one_news = $em->getRepository('ShmuftNewsBundle:News')->find($news_id);
        return $this->render('ShmuftNewsBundle:Page:show.html.twig', array(
            'one_news' => $one_news,
        ));
    }
}