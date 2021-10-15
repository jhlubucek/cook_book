<?php

namespace App\Repository;

use App\Entity\ImageCache;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ImageCache|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageCache|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageCache[]    findAll()
 * @method ImageCache[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageCacheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageCache::class);
    }

    // /**
    //  * @return ImageCache[] Returns an array of ImageCache objects
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
    public function findOneBySomeField($value): ?ImageCache
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
