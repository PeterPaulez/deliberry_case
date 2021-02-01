<?php
namespace App\Controller\Api\Products\Delete;

use App\Repository\ProductsRepository;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\Api\Products\Delete\Delete;

class Handler {

    private $productRepository;
    private $delete;

    public function __construct(ProductsRepository $productRepository, Delete $delete) {
        $this->productRepository = $productRepository;
        $this->delete = $delete;    
    }

    public function handler(int $id) {
        $product = $this->productRepository->find($id);
        if (empty($product)) {
            return View::create(['msg'=>'Product not found ['.$id.']'], Response::HTTP_BAD_REQUEST);
        } else {
            $this->delete->delete($product);
            return View::create(['msg'=>'Product deleted ['.$id.']'], Response::HTTP_ACCEPTED);
        }
    }    
}