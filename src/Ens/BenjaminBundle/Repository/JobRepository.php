<?php

// src/Ens/BenjaminBundle/Repository/JobRepository.php

namespace Ens\BenjaminBundle\Repository;
use Doctrine\ORM\EntityRepository;

class JobRepository extends EntityRepository
{
    public function getActiveJobs($category_id = null, $max = null)
    {
        $qb = $this->createQueryBuilder('j')
            ->where('j.expires_at > :date')
            ->setParameter('date', date('Y-m-d H:i:s', time()))
            ->orderBy('j.expires_at', 'DESC');

        if($max)
        {
            $qb->setMaxResults($max);
        }

        if($category_id)
        {
            $qb->andWhere('j.category = :category_id')
                ->setParameter('category_id', $category_id);
        }

        $query = $qb->getQuery();

        return $query->getResult();
    }
}

?>