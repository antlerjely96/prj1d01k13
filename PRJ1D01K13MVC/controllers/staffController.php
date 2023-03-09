<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }

    switch ($action){
        case 'login':
            if(isset($_SESSION['email'])){
                header('Location:index.php');
            } else {
                include_once 'views/staffs/login.php';
            }
            break;
        case 'loginProcess':
//            Lấy dữ liệu trên DB
            include_once 'models/staffModel.php';
            if($test == 0){
                header('Location:index.php?controller=staff&action=login');
            } elseif($test == 1) {
                header('Location:index.php');
            }
            break;
        case 'logout':
//            Xóa session
            include_once 'models/staffModel.php';
//            Quay về trang login
            header('Location:index.php?controller=staff&action=login');
            break;
    }
?>