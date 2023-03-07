<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a bill</title>
</head>
<body>
    <form method="post" action="index.php?controller=bill&action=store">
        Date Buy: <input type="date" name="date_buy" readonly value="<?= date('Y-m-d') ?>"><br>
        Status: <input type="radio" name="status" value="0"> Pending
                <input type="radio" name="status" value="1"> Success
        <br>
        Customer: <select name="customer_id">
            <option value=""> - Choose - </option>
            <?php
                foreach ($customers as $customer){
            ?>
                <option value="<?= $customer['id'] ?>">
                    <?= $customer['name'] ?>
                </option>
            <?php
                }
            ?>
        </select><br>
        <button>Add</button>
    </form>
</body>
</html>