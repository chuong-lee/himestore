<?php
class ProductController {
    private $productModel;
    public $data = [];
    public $list = [];

    function __construct() {
        $this->productModel = new ProductModel();
    }

    function renderView($data, $view) {
        extract($data);
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

    



    function detail() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            foreach ($this->list as $item) {
                if ($id == $item['id']) {
                    $this->data['detail'] = $item;
                    break;
                }
            }
            if (isset($this->data['detail'])) {
                $this->renderView($this->data, 'detail');
            } else {
                echo "Không tìm thấy sản phẩm.";
            }
        } else {
            echo "Không có ID được cung cấp.";
        }
    }
}
?>
