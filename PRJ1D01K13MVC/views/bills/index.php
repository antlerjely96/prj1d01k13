<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill list</title>
</head>
<body>
    <a href="index.php?controller=bill&action=create">Add a bill</a>
    <table border="1px" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td>ID</td>
            <td>Customer's name</td>
            <td>Customer's phone</td>
            <td>Date buy</td>
            <td>Status</td>
            <td></td>
            <td></td>
        </tr>
        <?php
            foreach ($bills as $bill){
        ?>
                <tr>
                    <td>
                        <?= $bill['id'] ?>
                    </td>
                    <td>
                        <?= $bill['name'] ?>
                    </td>
                    <td>
                        <?= $bill['phone'] ?>
                    </td>
                    <td>
                        <?= $bill['date_buy'] ?>
                    </td>
                    <td>
                        <?php
                            if($bill['status'] == 0){
                                echo 'Pending';
                            } elseif ($bill['status'] == 1){
                                echo 'Success';
                            } elseif ($bill['status'] == 2){
                                echo 'Cancel';
                            }
                        ?>
                    </td>
                    <td>
                        <a href="index.php?controller=bill&action=edit&id=<?= $bill['id'] ?>">Edit</a>
                    </td>
                    <td>
                        <a href="index.php?controller=bill&action=destroy&id=<?= $bill['id'] ?>">Delete</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>