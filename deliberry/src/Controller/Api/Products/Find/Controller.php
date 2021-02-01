<?php
namespace App\Controller\Api\Products\Find;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use App\Controller\Api\Products\Find\Handler;

class Controller extends AbstractFOSRestController {

    /**
     * @Rest\Get(path="/api/products")
     * @Rest\View(serializerGroups={"product"}, serializerEnableMaxDepthChecks=true) 
     */
    public function controller(Handler $handler) {
        return $handler->handler();
    }
    
}
