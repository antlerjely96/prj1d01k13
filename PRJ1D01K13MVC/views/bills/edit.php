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
    <?php
        foreach ($array['bills'] as $bill){
    ?>
        <form method="post" action="index.php?controller=bill&action=update">
            <input type="hidden" name="id" value="<?= $bill['id'] ?>">
            Date Buy: <input type="date" name="date_buy" readonly value="<?= $bill['date_buy'] ?>"><br>
            Status: <input type="radio" name="status" value="0" checked> Pending
                    <input type="radio" name="status" value="1"
                        <?php
                            if($bill['status'] == 1){
                                echo 'checked';
                            }
                        ?>
                    > Success
            <br>
            Customer: <select name="customer_id">
                <option value=""> - Choose - </option>
                <?php
                    foreach ($array['customers'] as $customer){
                ?>
                    <option value="<?= $customer['id'] ?>"
                        <?php
                            if($customer['id'] == $bill['customer_id']){
                                echo 'selected';
                            }
                        ?>
                    >
                        <?= $customer['name'] ?>
                    </option>
                <?php
                    }
                ?>
            </select><br>
            <button>Update</button>
        </form>
    <?php
        }
    ?>
</body>
</html>