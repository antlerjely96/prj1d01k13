<?php
    //Lấy hành động hiện tại
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    //Kiểm tra hành động hiện tại
    switch ($action){
        case '':
            //Lấy dữ liệu từ DB về và hiển thị ra màn hình
            include_once 'models/customerModel.php';
            include_once 'views/customers/index.php';
            break;
        case 'create':
            include_once 'views/customers/create.php';
            break;
        case 'store':
            include_once 'models/customerModel.php';
            header('Location:index.php?controller=customer');
            break;
        case 'edit':
            include_once 'models/customerModel.php';
            include_once 'views/customers/edit.php';
            break;
        case 'update':
            include_once 'models/customerModel.php';
            header('Location:index.php?controller=customer');
            break;
        case 'destroy':
            include_once 'models/customerModel.php';
            header('Location:index.php?controller=customer');
            break;
    }
?>