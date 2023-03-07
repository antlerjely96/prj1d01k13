<?php
//    Lấy action hiện tại
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
//    Kiểm tra action là gì
    switch ($action){
        case '':
//            Lấy tất cả các bản ghi từ DB về
            include_once 'models/billModel.php';
//            Hiển thị dữ liệu ra view
            include_once 'views/bills/index.php';
            break;
        case 'create':
//            Lấy dữ liệu Customer
            include_once 'models/billModel.php';
//            Hiển thị form thêm
            include_once 'views/bills/create.php';
            break;
        case 'store':
//            Lưu dữ liệu lên db
            include_once 'models/billModel.php';
//            Quay lại trang danh sách
            header('Location:index.php?controller=bill');
            break;
        case 'edit':
//            Lấy bản ghi đang được edit từ db về
            include_once 'models/billModel.php';
//            Hiển thị ra form sửa
            include_once 'views/bills/edit.php';
            break;
        case 'update':
//            Sửa dữ liệu trên db
            include_once 'models/billModel.php';
//            Quay lại trang danh sách
            header('Location:index.php?controller=bill');
            break;
        case 'destroy':
//            Xóa dữ liệu trên db
            include_once 'models/billModel.php';
//            Quay lại trang danh sách
            header('Location:index.php?controller=bill');
            break;
    }
?>