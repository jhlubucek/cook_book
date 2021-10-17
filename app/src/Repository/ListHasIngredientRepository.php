<?php

namespace App\Repository;

use App\Entity\ListHasIngredient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ListHasIngredient|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListHasIngredient|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListHasIngredient[]    findAll()
 * @method ListHasIngredient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListHasIngredientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListHasIngredient::class);
    }

    // /**
    //  * @return RecipeHasIngredient[] Returns an array of RecipeHasIngredient objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RecipeHasIngredient
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
