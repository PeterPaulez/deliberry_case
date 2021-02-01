<?php
namespace App\Controller\Api\Products\Find;

use App\Entity\Products;
use App\Repository\ProductsRepository;
use Doctrine\ORM\EntityManagerInterface;

class Find {

    private $productRepository;
    private $entityManager;

    public function __construct(ProductsRepository $productRepository, EntityManagerInterface $entityManager) {
        $this->productRepository = $productRepository;
        $this->entityManager = $entityManager;
    }

    public function find($data) {
        $result = '';
        if (empty($data)) {
            $result = $this->productRepository->findAll();
        } else if (!empty($data['name']) && !empty($data['description'])) {
            $dql_query = $this->entityManager->createQuery("
            SELECT u FROM App\Entity\Products u WHERE u.name LIKE '%".$data['name']."%' 
            OR u.description LIKE '%".$data['description']."%'
            ");
            $result = $dql_query->getResult();
        } else if (!empty($data['name'])) {
            $dql_query = $this->entityManager->createQuery("
            SELECT u FROM App\Entity\Products u WHERE u.name LIKE '%".$data['name']."%'
            ");
            $result = $dql_query->getResult();
        } else if (!empty($data['description'])) {
            $dql_query = $this->entityManager->createQuery("
            SELECT u FROM App\Entity\Products u WHERE u.description LIKE '%".$data['description']."%'
            ");
            $result = $dql_query->getResult();
        }

        return $result;
    }

    public function findOne(Products $product) {
        return $product;
    }    
}