<?php
namespace App\Controller\Api\Products\Delete;

use App\Repository\ProductsRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use App\Controller\Api\Products\Delete\Handler;


class Controller extends AbstractFOSRestController {

    /**
     * @Rest\Delete(path="/api/products/{id}", requirements={"id"="\d+"})
     * @Rest\View(serializerGroups={"product"}, serializerEnableMaxDepthChecks=true) 
     */
    public function controller(int $id, Handler $handler) {
        return $handler->handler($id);
    }
    
}