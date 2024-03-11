<?php

namespace App\Repository;

use App\Entity\Rôle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Rôle>
 *
 * @method Rôle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rôle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rôle[]    findAll()
 * @method Rôle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RôleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rôle::class);
    }

//    /**
//     * @return Rôle[] Returns an array of Rôle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Rôle
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
