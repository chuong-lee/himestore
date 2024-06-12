<?php
class ProductController {
    private $productModel;
    private $category;
    public $data = [];
    public $list = [];

    function __construct() {
        $this->productModel = new ProductModel();
        $this->category = new CategoryModel();
    }

    function renderView($data, $view) {
        extract($data);
        $view = 'app/view/' . $view . '.php';
        require_once $view;
    }

    function renderViews($data = null, $view) {
        // extract($data);
        $view = 'app/view/' . $view . '.php';
        require_once $view;
    }

    

    function getAllProduct(){
        $products = $this->productModel->getAllProduct();
        if (!empty($products)) {
            $data['products'] = $products;
            $this->renderView($data, 'product');

        } else {
            echo "Không tìm thấy sản phẩm phổ biến.";
        }
    }

    function getAllProductByLuotMua(){
        $products = $this->productModel->getProductByLuotMua();
        if (!empty($products)) {
            $data['products'] = $products;
            $this->renderView($data, 'product');

        } else {
            echo "Không tìm thấy sản phẩm phổ biến.";
        }
    }
    public function showProductDetail($id) {
        $product = $this->productModel->getProductById($id);
        include 'app/view/detail.php';
    }

    
    function getProductByIdDanhMuc() {
        $data['dsdm'] = $this->category->getCate();
        if(isset($_GET['id_danhmuc'])){
            $id_danhmuc = $_GET['id_danhmuc'];
        } else{
            $id_danhmuc = 0;
        }
        $products = $this->productModel->getProductByIdDanhMuc($id_danhmuc);
        $category = $this->category->getCateById($id_danhmuc);
        if (!empty($products)) {
            $data['productDanhMuc'] = $products;
            $data['category'] = $category;
            $this->renderView($data, 'cateproduct');
        } else {
            echo "Không tìm thấy sản phẩm phổ biến.";
        }
    }
    


    function detail() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }else{
            $id = 0;
        }
        $detail = $this->productModel->getIdPro($id);
        if(is_array($detail)) {
            $data['productDetail'] = $detail;
            $this->renderViews($data, 'detail');
        }else{
            echo "Không tìm thấy sản phẩm ";
        }
    }

    function detailSale() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }else{
            $id = 0;
        }
        $detail = $this->productModel->getIdPro($id);
        if(is_array($detail)) {
            $data['productDetailSale'] = $detail;
            $this->renderViews($data, 'detailSale');
        }else{
            echo "Không tìm thấy sản phẩm ";
        }
    }
    function getGiohang() {
        include 'app/view/giohang.php';
    }
}
?>
