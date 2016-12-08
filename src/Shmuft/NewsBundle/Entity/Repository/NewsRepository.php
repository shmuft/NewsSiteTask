<?php

namespace Shmuft\NewsBundle\Entity\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * NewsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NewsRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllNews($currentPageNews = 1)
    {
        $news = $this->findBy(array(),array('created'=>'DESC'), 5, 5*($currentPageNews - 1));
//        $news = $this->createQueryBuilder('b')
//            ->select('b')
//            ->addOrderBy('b.created', 'DESC');
        return $news;
    }

    public function getCountNews(){
        $count = $this->createQueryBuilder('b')
            ->select("count(1)")
            ->getQuery()->getOneOrNullResult();
        return $count[1];
    }
}
