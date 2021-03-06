<?php

namespace hflan\LanBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

/**
 * EventRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventRepository extends EntityRepository
{
    public function findNextEvent()
    {
        $qb = $this->createQueryBuilder('e')
            ->where('e.beginAt > CURRENT_TIMESTAMP()')
            ->setMaxResults(1);

        try{
            return $qb->getQuery()->getSingleResult();
        }
        catch(NoResultException $e){
            return null;
        }
    }
}
