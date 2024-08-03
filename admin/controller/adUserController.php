<?php
class adUserController
{
    private $userModel;
    private $roleModel;
    public $data = [];
    public $list = [];

    function __construct()
    {
        $this->userModel = new UserModel();
        $this->roleModel = new RoleModel();

    }

    function renderView($data, $view)
    {
        extract($data);
        $view = 'view/' . $view . '.php';
        require_once $view;
    }

    function getAllUser()
    {
        $listUser = $this->userModel->getAllUser();
        if (!empty($listUser)) {
            $data['listUser'] = $listUser;
            $this->renderView($data, 'adminShowUser');
        } else {
            echo "Không tìm thấy sản phẩm phổ biến.";
        }
    }

    public function addUser()
    {
        if (isset($_POST['addUser'])) {
            $data = [];
            $data['ten'] = $_POST['ten'] ?? '';
            $data['phone'] = $_POST['phone'] ?? 0;
            $data['email'] = $_POST['email'] ?? 0;
            $data['password'] = $_POST['password'] ?? '';
            $this->userModel->insertUserForUser($data);
            echo '<script>alert("Tao người dùng thành công!");</script>';
            echo '<script>location.href="indexAdmin.php?page=adminAddUser";</script>';
        }
    }

    function viewEditUser(){
        if(isset($_GET['id'])&&($_GET['id'])){
            $id = $_GET['id'];
            $this->data['ds_role'] = $this->roleModel->getAllRole();
            $this->data['user_detail'] = $this->userModel->getIdUser($id);
            $this->renderView($this->data,'editUser');
        }else{
            echo "no data";
        }
    }

    function editUser(){
        if(isset($_POST['editUser'])){
            $data = [];
            $data['ten'] = $_POST['ten'] ?? '';
            $data['phone'] = $_POST['phone'] ?? 0;
            $data['id_role'] = $_POST['id_role'] ?? null;
            $data['id'] = $_POST['iduser'];
            $this->userModel->updateUser($data);
            echo '<script>alert("Cập nhật người dùng thành công!");</script>';
            echo '<script>location.href="indexAdmin.php?page=adminShowUser";</script>';
        }
    }
}


