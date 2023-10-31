<?php

namespace App\Repository;

use App\Entity\Typecafe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Typecafe>
 *
 * @method Typecafe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typecafe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typecafe[]    findAll()
 * @method Typecafe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypecafeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Typecafe::class);
    }

//    /**
//     * @return Typecafe[] Returns an array of Typecafe objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Typecafe
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
