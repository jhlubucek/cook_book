<?php

namespace App\Repository;

use App\Entity\IngredientList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IngredientList|null find($id, $lockMode = null, $lockVersion = null)
 * @method IngredientList|null findOneBy(array $criteria, array $orderBy = null)
 * @method IngredientList[]    findAll()
 * @method IngredientList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IngredientListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IngredientList::class);
    }

    // /**
    //  * @return IngredientList[] Returns an array of IngredientList objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IngredientList
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
