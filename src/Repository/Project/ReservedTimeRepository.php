<?php

namespace Greendot\EshopBundle\Repository\Project;

use Greendot\EshopBundle\Entity\Project\ReservedTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservedTime>
 *
 * @method ReservedTime|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservedTime|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservedTime[]    findAll()
 * @method ReservedTime[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservedTimeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservedTime::class);
    }

    public function save(ReservedTime $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ReservedTime $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ReservedTime[] Returns an array of ReservedTime objects
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

//    public function findOneBySomeField($value): ?ReservedTime
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
