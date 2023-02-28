<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create customer</title>
</head>
<body>
    <?php
        foreach ($customers as $customer){
    ?>
        <form method="post" action="index.php?controller=customer&action=update">
            <input type="hidden" name="id" value="<?= $customer['id'] ?>">
            Name: <input type="text" name="name" value="<?= $customer['name'] ?>"><br>
            Address: <input type="text" name="address" value="<?= $customer['address'] ?>"><br>
            Phone: <input type="text" name="phone" value="<?= $customer['phone'] ?>"><br>
            Email: <input type="email" name="email" value="<?= $customer['email'] ?>"><br>
            <button>Update</button>
        </form>
    <?php
        }
    ?>
</body>
</html>