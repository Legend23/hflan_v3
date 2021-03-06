<?php

namespace hflan\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{
    public function queryAll($locale = null, $publicOnly = false)
    {
        $qb = $this->createQueryBuilder('a')->orderBy('a.createdAt', 'DESC');

        if($locale !== null) $qb->where('a.lang = :lang')->setParameter('lang', $locale);

        if($publicOnly) $qb->andWhere('a.published = true');

        return $qb;
    }
}
