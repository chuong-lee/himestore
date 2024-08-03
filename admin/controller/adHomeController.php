<?php
class adHomeController{
    private $category;
    private $product;
    private $user;
    private $data;
    function __construct()
    {
        $this->category = new CategoryModel();
        $this->product = new ProductModel();
        $this->user = new UserModel();
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

    function adduser(){
        $this->data['dsdm'] = $this->user->getAllUser();
        $this->renderViewAdmin('adminAddUser',$this->data);
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