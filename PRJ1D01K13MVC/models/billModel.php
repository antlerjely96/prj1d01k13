<?php
//function lấy dữ liệu
    function indexBill(){
        include_once 'connect/openConnect.php';
        $sql = "SELECT bill.*, customer.name, customer.address, customer.phone, customer.email FROM customer INNER JOIN bill ON customer.id = bill.customer_id";
        $bills = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        return $bills;
    }
//    Function lấy customer
    function createBill(){
        include_once 'connect/openConnect.php';
        $sql = "SELECT * FROM customer";
        $customers = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        return $customers;
    }
//    function lưu dữ liệu lên db
    function storeBill(){
        $date_buy = $_POST['date_buy'];
        $status = $_POST['status'];
        $customer_id = $_POST['customer_id'];
        include_once 'connect/openConnect.php';
        $sql = "INSERT INTO bill(date_buy, status, customer_id) VALUES ('$date_buy', '$status', '$customer_id')";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
//    function Lấy dữ liệu bản ghi từ DB theo id
    function editBill(){
        $id = $_GET['id'];
        include_once 'connect/openConnect.php';
        $sqlBill = "SELECT * FROM bill WHERE id = '$id'";
        $bills = mysqli_query($connect, $sqlBill);
        $sqlCustomer = "SELECT * FROM customer";
        $customers = mysqli_query($connect, $sqlCustomer);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['bills'] = $bills;
        $array['customers'] = $customers;
        return $array;
    }
//    function Sửa dữ liệu trên db
    function updateBill(){
        $id = $_POST['id'];
        $date_buy = $_POST['date_buy'];
        $status = $_POST['status'];
        $customer_id = $_POST['customer_id'];
        include_once 'connect/openConnect.php';
        $sql = "UPDATE bill SET date_buy = '$date_buy', status = '$status', customer_id = '$customer_id' WHERE id = '$id'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
//    function xóa dữ liệu trên db
    function destroyBill(){
        $id = $_GET['id'];
        include_once 'connect/openConnect.php';
        $sql = "DELETE FROM bill WHERE id = '$id'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }

//    Kiểm tra hành động hiện tại
    switch ($action){
        case '':
//            Lấy dữ liệu từ DB về
            $bills = indexBill();
            break;
        case 'create':
//            Lấy customer
            $customers = createBill();
            break;
        case 'store':
//            Lưu dữ liệu lên db
            storeBill();
            break;
        case 'edit':
//            Lấy dữ liệu bản ghi từ DB theo id
            $array = editBill();
            break;
        case 'update':
//            Sửa dữ liệu trên db
            updateBill();
            break;
        case 'destroy':
//            Xóa dữ liệu trên db
            destroyBill();
            break;
    }
?>