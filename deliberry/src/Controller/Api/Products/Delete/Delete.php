<?php
namespace App\Controller\Api\Products\Delete;

use App\Entity\Products;
use App\Repository\ProductsRepository;
use Doctrine\ORM\EntityManagerInterface;

class Delete {

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;    
    }

    public function delete(Products $product) {
        $this->entityManager->remove($product);
        $this->entityManager->flush();
    }    
}