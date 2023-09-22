<?php

namespace CubaDevOps\GraphApi\Domain\ValueObjects;

class ApiToken
{
    /**
     * @var string
     */
    private $value;
    public function __construct(string $value)
    {
        $this->value = $value;
    }
    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    
    public function isValid()
    {
        //Todo implement validation mecanism based on PrestaShop webhooks tokens created on BackOffice
    }
}
