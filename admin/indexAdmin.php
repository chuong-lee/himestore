<?php
require_once '../app/model/database.php';
require_once '../app/model/UserModel.php';
require_once '../app/model/ProductModel.php';
require_once '../app/model/CategoryModel.php';
require_once 'controller/adHomeController.php';
require_once 'controller/adProductController.php';
require_once 'controller/adUserController.php';
require_once 'controller/adCategoryController.php';


require_once 'view/adHeader.php';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'adminShowPro':
            $product = new adProductController;
            $product->getAllProduct();
            break;

        case 'adminShowUser':
            $controller = new adUserController();
            $controller->getAllUser();
            break;
        case 'adminAddPro':
            $controller = new adHomeController();
            $controller->addPro();
            $controller = new adProductController();
            $controller->addPro();
            break;
        case 'editpro':
            $viewedit = new AdProductcontroller();
            $viewedit->viewEdit();
            $editpro = new AdProductcontroller();
            $editpro->editPro();
            break;
        case 'delpro':
            $delpro = new AdProductcontroller();
            $delpro->delPro();
            break;
        case 'adCategory':
            $controller = new adHomeController();
            $controller->addcate();
            $controller = new adCategoryController();
            $controller->addCategory();
            break;
        case 'adShowCategory':
            $controller = new adCategoryController();
            $controller->getAllCategory();
            break;
        case 'delcate':
            $delpro = new adCategoryController();
            $delpro->delCate();
            break;
        case 'editcate':
            $viewedit = new adCategoryController();
            $viewedit->viewEditCate();
            $editpro = new adCategoryController();
            $editpro->editCate();
            break;
        default:
            $home = new adHomeController();
            $home->home();
            break;
    }
} else {
    $home = new adHomeController();
    $home->home();
}
// require_once 'app/view/footer.php';
