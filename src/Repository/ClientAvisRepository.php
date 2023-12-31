<?php

namespace App\Repository;

use App\Entity\ClientAvis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ClientAvis>
 *
 * @method ClientAvis|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientAvis|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientAvis[]    findAll()
 * @method ClientAvis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientAvisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientAvis::class);
    }

//    /**
//     * @return ClientAvis[] Returns an array of ClientAvis objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ClientAvis
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
