<?php

namespace App\Repository;

use App\Entity\Acadimie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Acadimie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Acadimie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Acadimie[]    findAll()
 * @method Acadimie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AcadimieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Acadimie::class);
    }

    // /**
    //  * @return Acadimie[] Returns an array of Acadimie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Acadimie
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
