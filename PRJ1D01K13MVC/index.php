<?php
    //Lấy controller đang làm việc
    $controller = '';
    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
    //Kiểm tra đang làm việc với controller nào
    switch ($controller){
        case '':
            //Cho chọn làm việc với controller nào
            include_once 'views/index.php';
            break;
        case 'customer':
            include_once 'controllers/customerController.php';
            break;
        case 'bill':
            include_once 'controllers/billController.php';
            break;
    }
?>