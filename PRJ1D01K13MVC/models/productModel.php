<?php
    function indexProduct(){
        include_once 'connect/openConnect.php';
        $sql = "SELECT * FROM products";
        $products = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        return $products;
    }
    function add_cart(){
        $product_id = $_GET['id'];
        if(isset($_SESSION['cart'])){
            if(isset($_SESSION['cart'][$product_id])){
                $_SESSION['cart'][$product_id]++;
            } else {
                $_SESSION['cart'][$product_id] = 1;
            }
        } else {
            $_SESSION['cart'] = array();
            $_SESSION['cart'][$product_id] = 1;
        }
    }

    function view_cart(){
        include_once 'connect/openConnect.php';
        $cart = array();
        if($_SESSION['cart']){
            foreach ($_SESSION['cart'] as $product_id => $amount){
                $sqlProductInfor = "SELECT * FROM products WHERE id = '$product_id'";
                $products = mysqli_query($connect, $sqlProductInfor);
                foreach ($products as $product){
                    $cart[$product_id]['name'] = $product['name'];
                    $cart[$product_id]['price'] = $product['price'];
                    $cart[$product_id]['amount'] = $amount;
                }
            }
        }
        include_once 'connect/closeConnect.php';
        return $cart;
    }

    switch ($action){
        case '':
            $products = indexProduct();
            break;
        case 'add_cart':
            add_cart();
            break;
        case 'view_cart':
            $cart = view_cart();
            break;
    }
?>