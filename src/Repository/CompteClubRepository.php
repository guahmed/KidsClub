<?php

namespace App\Repository;

use App\Entity\CompteClub;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CompteClub|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompteClub|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompteClub[]    findAll()
 * @method CompteClub[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompteClubRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompteClub::class);
    }

    // /**
    //  * @return CompteClub[] Returns an array of CompteClub objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CompteClub
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
