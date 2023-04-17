<?php

namespace CubaDevOps\GraphApi\GraphQl\Application;

use CubaDevOps\GraphApi\Entity\PsProduct;
use CubaDevOps\GraphApi\Entity\PsProductLang;
use CubaDevOps\TheCodingMachine\GraphQLite\Annotations\Query;
use Doctrine\ORM\EntityManagerInterface;

class ProductRepository
{
    private EntityManagerInterface $entity_manager;
    public function __construct(EntityManagerInterface $entity_manager)
    {
        $this->entity_manager = $entity_manager;
    }
    /**
     * @Query
     * @param int $id
     * @return PsProduct|null
     * @noinspection PhpIncompatibleReturnTypeInspection
     */
    public function product(int $id): ?PsProduct
    {
        return $this->entity_manager->find(PsProduct::class, $id);
    }

    /**
     * @Query
     * @return PsProduct[]
     */
    public function products():array
    {
        return $this->entity_manager->getRepository(PsProduct::class)->findAll();
    }
}
