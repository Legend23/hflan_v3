<?php

namespace hflan\GuestbookBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FeedbackRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FeedbackRepository extends EntityRepository
{
    public function queryAll()
    {
        return $this->createQueryBuilder('f')->orderBy('f.createdAt', 'DESC');
    }
}