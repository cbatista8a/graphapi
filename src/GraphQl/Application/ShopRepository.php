<?php

namespace CubaDevOps\GraphApi\GraphQl\Application;

use CubaDevOps\GraphApi\Entity\PsShop;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Query;
use Doctrine\ORM\EntityManagerInterface;

class ShopRepository
{

    private EntityManagerInterface $entity_manager;

    public function __construct(EntityManagerInterface $entity_manager)
    {
        $this->entity_manager = $entity_manager;
    }

    /**
     * @Query
     * @param int $id
     * @return PsShop
     * @noinspection PhpIncompatibleReturnTypeInspection
     */
    public function shop(int $id): PsShop
    {
        return $this->entity_manager->find(PsShop::class, $id);
    }

    /**
     * @Query
     * @return PsShop[]
     */
    public function shops(): array
    {
        return $this->entity_manager->getRepository(PsShop::class)->findAll();
    }
}