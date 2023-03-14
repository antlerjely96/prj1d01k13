<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List's Product</title>
</head>
<body>
    <table border="1px" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Amount</th>
            <th></th>
        </tr>
        <?php
            foreach ($products as $product){
        ?>
            <tr>
                <td>
                    <?= $product['id'] ?>
                </td>
                <td>
                    <?= $product['name'] ?>
                </td>
                <td>
                    <?= $product['price'] ?>
                </td>
                <td>
                    <?= $product['amount'] ?>
                </td>
                <td>
                    <a href="index.php?controller=product&action=add_cart&id=<?= $product['id'] ?>">Add to cart</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>