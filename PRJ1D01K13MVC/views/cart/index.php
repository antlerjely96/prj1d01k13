<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>
<body>
    <table cellspacing="0" cellpadding="0" border="1px" width="100%">
        <tr>
            <th>Product's ID</th>
            <th>Product's name</th>
            <th>Product's price</th>
            <th>Product's amount</th>
        </tr>
        <?php
            foreach ($cart as $product_id => $value){
        ?>
            <tr>
                <td>
                    <?= $product_id ?>
                </td>
                <td>
                    <?= $value['name'] ?>
                </td>
                <td>
                    <?= $value['price'] ?>
                </td>
                <td>
                    <?= $value['amount'] ?>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
    <a href="index.php?controller=product">Back to product's list</a>
</body>
</html>