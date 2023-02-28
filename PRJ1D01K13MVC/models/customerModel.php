<?php
    //function lấy dữ liệu
    function index(){
        include_once 'connect/openConnect.php';
        $sql = "SELECT * FROM customer";
        $customers = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        return $customers;
    }

    //Kiểm tra hành động hiện tại
    switch ($action){
        case '':
            //Lấy dữ liệu từ db
            $customers = index();
            break;
    }
?>