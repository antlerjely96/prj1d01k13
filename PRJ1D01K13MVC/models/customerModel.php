<?php
    //function lấy dữ liệu
    function index(){
        include_once 'connect/openConnect.php';
        $sql = "SELECT * FROM customer";
        $customers = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        return $customers;
    }
    //function để lưu dữ liệu lên db
    function store(){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        include_once 'connect/openConnect.php';
        $sql = "INSERT INTO customer(name, address, phone, email) VALUES ('$name', '$address', '$phone', '$email')";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
//    function lấy bản ghi dựa theo id
    function edit(){
        $id = $_GET['id'];
        include_once 'connect/openConnect.php';
        $sql = "SELECT * FROM customer WHERE id = '$id'";
        $customers = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        return $customers;
    }
    //function update bản ghi theo id
    function update(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        include_once 'connect/openConnect.php';
        $sql = "UPDATE customer SET name = '$name', address = '$address', phone = '$phone', email = '$email' WHERE id = '$id'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    //function delete bản ghi theo id
    function destroy(){
        $id = $_GET['id'];
        include_once 'connect/openConnect.php';
        $sql = "DELETE FROM customer WHERE id = '$id'";
        $customers = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }

    //Kiểm tra hành động hiện tại
    switch ($action){
        case '':
            //Lấy dữ liệu từ db
            $customers = index();
            break;
        case 'store':
            //Lưu dữ liệu lên db
            store();
            break;
        case 'edit':
            //Lấy bản ghi dựa theo id
            $customers = edit();
            break;
        case 'update':
            //update bản ghi theo id
            update();
            break;
        case 'destroy':
            //delete bản ghi theo id
            destroy();
            break;
    }
?>