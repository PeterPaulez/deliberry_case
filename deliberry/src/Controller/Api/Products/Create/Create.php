<?php
namespace App\Controller\Api\Products\Create;

use App\Entity\Products;
use Doctrine\ORM\EntityManagerInterface;

class Create {

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;    
    }

    public function create(Products $product) {
        $this->entityManager->persist($product);
        $this->entityManager->flush();
    }    
}