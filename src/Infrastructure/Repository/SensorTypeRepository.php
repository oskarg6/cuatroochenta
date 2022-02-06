<?php

namespace App\Infrastructure\Repository;

use App\Application\Feature\ListSensorType\SensorTypeRepositoryInterface as ListSensorTypeFeature;
use App\Domain\Entity\SensorType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SensorType|null find($id, $lockMode = null, $lockVersion = null)
 * @method SensorType|null findOneBy(array $criteria, array $orderBy = null)
 * @method SensorType[]    findAll()
 * @method SensorType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SensorTypeRepository extends ServiceEntityRepository implements ListSensorTypeFeature
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SensorType::class);
    }

    // /**
    //  * @return SensorType[] Returns an array of SensorType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SensorType
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ;
    }
}
