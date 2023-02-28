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
        case 'edit':
        case 'destroy':
    }
?>