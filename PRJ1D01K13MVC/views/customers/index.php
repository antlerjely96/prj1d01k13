<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer's List</title>
</head>
<body>
    <a href="index.php?controller=customer&action=create">Add a customer</a>
    <table border="1px" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
        <?php
            foreach ($customers as $customer){
        ?>
            <tr>
                <td>
                    <?= $customer['id'] ?>
                </td>
                <td>
                    <?= $customer['name'] ?>
                </td>
                <td>
                    <?= $customer['address'] ?>
                </td>
                <td>
                    <?= $customer['phone'] ?>
                </td>
                <td>
                    <?= $customer['email'] ?>
                </td>
                <td>
                    <a href="index.php?controller=customer&action=edit&id=<?= $customer['id'] ?>">Edit</a>
                </td>
                <td>
                    <a href="index.php?controller=customer&action=destroy&id=<?= $customer['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>