<?php

namespace App\Repository;

use App\Entity\ParentChild;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ParentChild|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParentChild|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParentChild[]    findAll()
 * @method ParentChild[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParentChildRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ParentChild::class);
    }

    // /**
    //  * @return ParentChild[] Returns an array of ParentChild objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ParentChild
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
