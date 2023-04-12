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
     * @return PsProduct
     * @noinspection PhpIncompatibleReturnTypeInspection
     */
    public function product(int $id): PsProduct
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

    /**
     * @Query
     * @param int $id
     * @return PsProductLang
     */
    public function localizedProduct(int $id,int $id_lang):PsProductLang
    {
        /** @var PsProductLang $product_lang */
        $product_lang = $this->entity_manager->getRepository(PsProductLang::class)->findOneBy(['id' => $id,'idLang' => $id_lang]);
        return $product_lang;
    }
}
