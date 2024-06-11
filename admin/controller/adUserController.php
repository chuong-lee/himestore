<?php
class adUserController {
    private $userModel;
    public $data = [];
    public $list = [];

    function __construct() {
        $this->userModel = new UserModel();
    }

    function renderView($data, $view) {
        extract($data);
        $view = 'view/' . $view . '.php';
        require_once $view;
    }

    function getAllUser(){
        $listUser = $this->userModel->getAllUser();
        if (!empty($listUser)) {
            $data['listUser'] = $listUser;
            $this->renderView($data, 'adminShowUser');

        } else {
            echo "Không tìm thấy sản phẩm phổ biến.";
        }
    }

}
?>
