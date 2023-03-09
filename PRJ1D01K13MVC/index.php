<?php
    session_start();
    //Lấy controller đang làm việc
    $controller = '';
    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
    //Kiểm tra đang làm việc với controller nào
    switch ($controller){
        case '':
            //Cho chọn làm việc với controller nào
            if(isset($_SESSION['email'])){
                include_once 'views/index.php';
            } else {
                header('Location:index.php?controller=staff&action=login');
            }
            break;
        case 'customer':
            include_once 'controllers/customerController.php';
            break;
        case 'bill':
            include_once 'controllers/billController.php';
            break;
        case 'staff':
            include_once 'controllers/staffController.php';
            break;
    }
?>