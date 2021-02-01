<?php
namespace App\Controller\Api\Categories;

use App\Repository\CategoriesRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;

class Controller extends AbstractFOSRestController {

    /**
     * @Rest\Get(path="/api/categories")
     * @Rest\View(serializerGroups={"product"}, serializerEnableMaxDepthChecks=true) 
     */
    public function getList(CategoriesRepository $categoryRepository) {

        $response = new JsonResponse();
        return $response->setData([
            'success' => true,
            'data' => $categoryRepository->findAll()
        ]);
    }
    
}
