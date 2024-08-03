<?php
class adCategoryController{
    private $category;
    private $product;
    public $data = [];
    function __construct()
    {
        $this->category = new CategoryModel();
        // $this->product = new ProductModel();
    }
    public function renderViewAdmin($view, $data)
    {
        extract($data);
        $view = 'view/' . $view . '.php';
        require_once $view;
    }

    function getAllCategory(){
        $category = $this->category->getCate();
        if (!empty($category)) {
            $data['category'] = $category;
            $this->renderViewAdmin('adShowCategory',$data );

        } else {
            echo "Không tìm thấy danh mục sản phẩm.";
        }
    }

    public function addCategory() {
        echo '<script>console.log("111111 ")</script>';
        if (isset($_POST['addcate'])) {
            $data = [];
            echo '<script>console.log(1111,`$data`")</script>';
            $data['tenDanhMuc'] = $_POST['tenDanhMuc'] ?? '';
            $data['image'] = $_FILES['image']['name'] ?? '';
            echo '<script>console.log("222 ' . $data['image'] . '")</script>';
            $uploadDir = 'img/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            echo '<script>console.log("222 ' . $uploadDir . '")</script>';
            $file = $uploadDir . basename($data['image']);
            echo '<script>console.log("111. ' . $file . '")</script>';
            if (move_uploaded_file($_FILES['image']['tmp_name'], $file)) {
                $this->category->insertCate($data);
                echo '<script>alert("Thêm sản phẩm thành công!");</script>';
                echo '<script>location.href="indexAdmin.php?page=adCategory";</script>';
            } else {
                echo '<script>alert("Không thể tải lên hình ảnh. Vui lòng thử lại."); </script>';
            }
        }
    }
    
    function delCate(){
        if(isset($_GET['id'])&&($_GET['id'])>0){
            $id = $_GET['id'];
            $data = $this->category->getIdCate($id);
            $file = 'img/'.$data['image'].'';
            unlink($file);
            $this->category->deleteCate($id);
            echo'<script>location.href="indexAdmin.php?page=adShowCategory";</script>';
        }
    }

    function viewEditCate(){
        if(isset($_GET['id'])&&($_GET['id'])){
            $id = $_GET['id'];
            $this->data['cate_detail'] = $this->category->getIdCate($id);
            $this->renderViewAdmin('editCate', $this->data);
        }else{
            echo "no data";
        }
    }
    function editCate(){
        if(isset($_POST['editCate'])){
            $data = [];
            $data['tenDanhMuc'] = $_POST['tenDanhMuc'] ?? '';
            $data['image'] = $_FILES['image']['name'] ?? '';
            $data['id'] = $_POST['idcate'];
            echo '<script>console.log("33333 ' . $data['id'] . '")</script>';
            $data['image_old'] = $_POST['image_old'];
            if($data['image'] == ''){
                $data['image'] = $data['image_old'];
            }else{
                $file = 'img/'.$data['image'].'';
                move_uploaded_file($_FILES['image']['tmp_name'],$file);
                $file_old = 'img/'.$data['image_old'].'';
                unlink($file_old);
            }
            echo '<script>console.log("tendanhmuc111 ' . $data['tenDanhMuc'] . '")</script>';
            $this->category->updateCate($data);
            echo '<script>console.log("tendanhmuc222 ' . $data['tenDanhMuc'] . '")</script>';
            echo'<script>alert("Cập nhật thành công")</script>';
            echo'<script>location.href="indexAdmin.php?page=adShowCategory";</script>';
        }
    }
}