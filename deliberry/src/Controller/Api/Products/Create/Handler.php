<?php
namespace App\Controller\Api\Products\Create;

use Symfony\Component\HttpFoundation\RequestStack;
use App\Controller\Api\Products\Create\Create;
use App\Entity\Products;
use App\Controller\Api\Products\Form\Model\Dto;
use App\Controller\Api\Products\Form\Type\Type;
use Symfony\Component\Form\FormFactoryInterface;

class Handler {

    private $create;
    private $request;
    private $formFactoryInterface;

    public function __construct(RequestStack $request, Create $create, FormFactoryInterface $formFactoryInterface) {
        $this->create = $create;
        $this->request = $request;
        $this->formFactoryInterface = $formFactoryInterface;
    }

    public function handler() {        
        $dto = new Dto();
        $form = $this->formFactoryInterface->create(Type::class , $dto);
        $data = json_decode($this->request->getCurrentRequest()->getContent(),true);
        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $product = new Products();
            $product
                ->setName($dto->name)
                ->setDescription($dto->description)
                ->setEan($dto->ean)
                ->setSku($dto->sku)
                ->setType($dto->type)
                ->setWeight(floatval($dto->weight))
                ->setEnabled(boolval($dto->enabled));
            $this->create->create($product);
            return $product;
        }
        return $form;
    }    
}