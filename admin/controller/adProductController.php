<?php
class adProductController {
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
        $view = 'view/' . $view . '.php';
        require_once $view;
    }

    function renderAdminView($view,$data = null) {
        // extract($data);
        $view = 'view/' . $view . '.php';
        require_once $view;
    }

    function getAllProduct(){
        $products = $this->productModel->getAllProduct();
        if (!empty($products)) {
            $data['products'] = $products;
            $this->renderView($data, 'adminShowPro');

        } else {
            echo "Không tìm thấy sản phẩm phổ biến.";
        }
    }
    function getAllProductDetail(){
        $products = $this->productModel->getAllProduct();
        if (!empty($products)) {
            $data['listProduct'] = $products;
            $this->renderView($data, 'adminDetail');

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
    

    public function addPro() {
        if (isset($_POST['addPro'])) {
            $data = [];
            $data['id_danhmuc'] = $_POST['id_danhmuc'] ?? null;
            $data['name'] = $_POST['name'] ?? '';
            $data['gia'] = $_POST['gia'] ?? 0;
            $data['soluong'] = $_POST['soluong'] ?? 0;
            $data['mota'] = $_POST['mota'] ?? '';
            $data['sale'] = $_POST['sale'] ?? 0;
            $data['luot_mua'] = $_POST['luot_mua'] ?? 0;
            $data['image'] = $_FILES['image']['name'] ?? '';
            $uploadDir = 'img/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
    
            $file = $uploadDir . basename($data['image']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $file)) {
                $this->productModel->insertPro($data);
                echo '<script>alert("Thêm sản phẩm thành công!");</script>';
                echo '<script>location.href="indexAdmin.php?page=adminAddPro";</script>';
            } else {
                echo '<script>alert("Không thể tải lên hình ảnh. Vui lòng thử lại.");</script>';
            }
        }
    }

    function delPro(){
        if(isset($_GET['id'])&&($_GET['id'])>0){
            $id = $_GET['id'];
            $data = $this->productModel->getIdPro($id);
            $file = 'img/'.$data['image'].'';
            unlink($file);
            $this->productModel->deletePro($id);
            echo'<script>location.href="indexAdmin.php?page=adminShowPro";</script>';
        }
    }

    function viewEdit(){
        if(isset($_GET['id'])&&($_GET['id'])){
            $id = $_GET['id'];
            $this->data['listcate'] = $this->category->getCate();
            $this->data['pro_detail'] = $this->productModel->getIdPro($id);
            $this->renderAdminView('editpro', $this->data);
        }else{
            echo "no data";
        }
    }

    function editPro(){
        if(isset($_POST['edit'])){
            $data = [];
            
            $data['name'] = $_POST['name'];
            $data['idcate'] = $_POST['idcate'];
            $data['image'] = $_FILES['image']['name'];
            $data['id'] = $_POST['idpro'];
            $data['image_old'] = $_POST['image_old'];
            if($data['image'] == ''){
                $data['image'] = $data['image_old'];
            }else{
                $file = 'img/'.$data['image'].'';
                move_uploaded_file($_FILES['image']['tmp_name'],$file);
                $file_old = 'img/'.$data['image_old'].'';
                unlink($file_old);
            }
            $this->productModel->updatePro($data);
            echo'<script>alert("Cập nhật thành công")</script>';
            echo'<script>location.href="indexAdmin.php?page=adminShowPro";</script>';
        }
    }

    



    // function detail() {
    //     if (isset($_GET['id'])) {
    //         $id = $_GET['id'];
    //         foreach ($this->list as $item) {
    //             if ($id == $item['id']) {
    //                 $this->data['detail'] = $item;
    //                 break;
    //             }
    //         }
    //         if (isset($this->data['detail'])) {
    //             $this->renderView($this->data, 'detail');
    //         } else {
    //             echo "Không tìm thấy sản phẩm.";
    //         }
    //     } else {
    //         echo "Không có ID được cung cấp.";
    //     }
    // }
}
?>
