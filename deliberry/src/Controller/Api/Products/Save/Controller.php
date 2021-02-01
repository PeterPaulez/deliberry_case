<?php
namespace App\Controller\Api\Products\Save;

use App\Repository\ProductsRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

class Controller extends AbstractFOSRestController {

    /**
     * @Rest\Put(path="/api/products/{id}", requirements={"id"="\d+"})
     * @Rest\View(serializerGroups={"product"}, serializerEnableMaxDepthChecks=true) 
     */
    public function controller(int $id, ProductsRepository $productRepository) {
        return $productRepository->find($id);
    }
    
}