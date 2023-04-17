<?php

namespace CubaDevOps\GraphApi\GraphQl\Application;

use CubaDevOps\GraphApi\Entity\PsCategory;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Query;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;

class CategoryRepository
{
    private EntityManagerInterface $entity_manager;
    public function __construct(EntityManagerInterface $entity_manager)
    {
        $this->entity_manager = $entity_manager;
    }

    /**
     * @Query
     * @param int $id
     * @return PsCategory|null
     * @noinspection PhpIncompatibleReturnTypeInspection
     */
    public function category(int $id): ?PsCategory
    {
        return $this->entity_manager->find(PsCategory::class, $id);
    }

    /**
     * @Query
     * @return PsCategory[]
     */
    public function categories():array
    {
        /** @var QueryBuilder $dql */
        $dql = $this->entity_manager->getRepository(PsCategory::class)->createQueryBuilder('c');
        return $dql->where('c.id > :root')
            ->setParameter(':root',1)
            ->getQuery()
            ->getResult();
    }
}
