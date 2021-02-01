<?php
namespace App\Controller\Api\Products\Find;

use Symfony\Component\HttpFoundation\RequestStack;
use App\Controller\Api\Products\Find\Find;
use App\Repository\ProductsRepository;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;

class Handler {

    private $productRepository;
    private $find;
    private $request;

    public function __construct(RequestStack $request, ProductsRepository $productRepository, Find $find) {
        $this->productRepository = $productRepository;
        $this->find = $find;
        $this->request = $request;
    }

    public function handler() {
        $data['id'] = $this->request->getCurrentRequest()->get('id','');
        $data['name'] = $this->request->getCurrentRequest()->get('name','');
        $data['description'] = $this->request->getCurrentRequest()->get('description','');

        if (!empty($data['id'])) {
            $id = $data['id'];
            $product = $this->productRepository->find($id);
            if (empty($product)) {
                return View::create(['msg'=>'Product not found ['.$id.']'], Response::HTTP_BAD_REQUEST);
            } else {
                return $this->find->findOne($product);
            }
        } else if (!empty($data['description']) || !empty($data['name'])) {
            return $this->find->find($data);
        } else {
            return $this->find->find([]);
        }
    }    
}