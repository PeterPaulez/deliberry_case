<?php
namespace App\Controller\Api\Products\Form\Model;

use App\Entity\Products;

class Dto {
    public $categories;
    public $name;
    public $description;
    public $ean;
    public $sku;
    public $type;
    public $weight;
    public $enabled;

    public function __construct() {
        $this->categories = [];
    }

    public static function createFromEntity(Products $product): self {
        $dto = new self();
        $dto->name = $product->getName();
        $dto->description = $product->getDescription();
        $dto->ean = $product->getEan();
        $dto->sku = $product->getSku();
        $dto->type = $product->getType();
        $dto->weight = $product->getWeight();
        $dto->enabled = $product->getEnabled();
        return $dto;
    }
}