<?php
class adHomeController{
    private $category;
    private $product;
    private $data;
    function __construct()
    {
        $this->category = new CategoryModel();
        $this->product = new ProductModel();
    }
    public function renderViewAdmin($view, $data)
    {
        $view = 'view/' . $view . '.php';
        require_once $view;
    }

    function addpro(){
        $this->data['dsdm'] = $this->category->getCate();
        $this->renderViewAdmin('adminAddPro',$this->data);
    }

    function addcate(){
        $this->data['dsdm'] = $this->category->getCate();
        $this->renderViewAdmin('adCategory',$this->data);
    }

    function home(){
        $this->data['dsdm'] = $this->category->getCate();
        $this->data['dsproduct'] = $this->product->getAllProduct();
        $this->data['dsbc'] = $this->product->getProductByLuotMua();
        $this->renderViewAdmin('adHome',$this->data);
    }
}