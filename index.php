<?php
require_once 'app/model/database.php';
require_once 'app/model/ProductModel.php';
require_once 'app/model/CategoryModel.php';
require_once 'app/model/UserModel.php';
require_once 'app/controller/HomeController.php';
require_once 'app/controller/ProductController.php';
require_once 'app/controller/UserController.php';
require_once 'app/view/header.php';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'detail':
            $detail = new ProductController;
            $detail->detail();
            break;
        case 'detailSale':
            $detail = new ProductController;
            $detail->detailSale();
            break;

        case 'product':
            $product = new ProductController;
            $product->getAllProduct();
            break;

        case 'signin':
            $signin = new UserController();
            $signin->signinUser();
            break;
        case 'register':
            $signin = new UserController();
            $signin->addUser();
            break;

        case 'adminDetail':
            $controller = new ProductController();
            $controller->getAllProduct();
            break;
        case 'cateproduct':
            $controller = new ProductController();
            $controller->getProductByIdDanhMuc();
            break;

        case 'giohang':
            $controller = new ProductController();
            $controller->getGiohang();
            break;
        default:
            $home = new HomeController();
            $home->home();
            break;

    }
} else {
    $home = new HomeController();
    $home->home();
}
require_once 'app/view/footer.php';
