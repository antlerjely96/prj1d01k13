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
    <form method="post" action="index.php?controller=customer">
        Search: <input type="text" name="search" value="<?= $array['search']?>">
        <button>Search</button>
    </form>
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
            foreach ($array['customers'] as $customer){
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
    <p>Trang</p>
    <?php
        for ($i = 1; $i <= $array['page']; $i++){
    ?>
        <form method="post" action="index.php?controller=customer">
            <input type="hidden" name="search" value="<?= $array['search']?>">
            <input type="hidden" name="page" value="<?= $i ?>">
            <button><?= $i ?></button>
        </form>
    <?php
        }
    ?>
</body>
</html>