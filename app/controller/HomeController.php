<?php
class HomeController{
    private $category;
    private $product;
    private $data;
    function __construct()
    {
        $this->category = new CategoryModel();
        $this->product = new ProductModel();
    }
    public function view($data){
        require_once 
        'app/view/home.php';
    }

    // public function product($data){
    //     require_once 
    //     'app/view/product.php';
    // }
    function home(){
        $this->data['dsdm'] = $this->category->getCate();
        $this->data['dsproduct'] = $this->product->getAllProduct();
        $this->data['dsbc'] = $this->product->getProductByLuotMua();
        $this->view($this->data);
    }
}