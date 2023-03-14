<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    switch ($action){
        case '':
            include_once 'models/productModel.php';
            include_once 'views/product/index.php';
            break;
        case 'add_cart':
//            Thêm sp lên giỏ hàng trên session
            include_once 'models/productModel.php';
//            Quay trang giỏ hàng
        header('Location:index.php?controller=product&action=view_cart');
            break;
        case 'view_cart':
//            Lấy sản phẩm trên session về
            include_once 'models/productModel.php';
            include_once 'views/cart/index.php';
            break;
    }
?>