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
    <form method="post" action="index.php?controller=customer&action=store">
        Name: <input type="text" name="name"><br>
        Address: <input type="text" name="address"><br>
        Phone: <input type="text" name="phone"><br>
        Email: <input type="email" name="email"><br>
        <button>Add</button>
    </form>
</body>
</html>