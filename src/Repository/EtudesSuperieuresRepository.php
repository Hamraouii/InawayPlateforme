<?php

namespace App\Repository;

use App\Entity\EtudesSuperieures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EtudesSuperieures|null find($id, $lockMode = null, $lockVersion = null)
 * @method EtudesSuperieures|null findOneBy(array $criteria, array $orderBy = null)
 * @method EtudesSuperieures[]    findAll()
 * @method EtudesSuperieures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtudesSuperieuresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EtudesSuperieures::class);
    }

    public function getLatest($limit = 8)
    {
        $qb = $this->createQueryBuilder('b')
                   ->select('b')
                   ->andWhere('b.approuve = 1')
                   ->addOrderBy('b.idEs', 'DESC');

        if (false === is_null($limit))
            $qb->setMaxResults($limit);

        return $qb->getQuery()
                  ->getResult();
    }
    // /**
    //  * @return EtudesSuperieures[] Returns an array of EtudesSuperieures objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EtudesSuperieures
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
