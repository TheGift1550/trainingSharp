<?php include ('dbConnection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
</head>
<body>
    <form action="" method="$_POST">
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Role</label>
        <input type="text" name="role"><br>
        <label>Rate</label>
        <input type="float" name="rate"><br>
    </form>
    <button>List</button>
    <button>Add</button>
    <button>Remove</button>
    <button>update</button>
</body>
</html>