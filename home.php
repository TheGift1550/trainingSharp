<?php include ('dbConnection.php'); ?>
<?php include ('list_members.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
</head>
<body>
<h2>List of Members</h2>
    <form action="list_members.php" method="post">
        <input type="submit" value="List Members">
    </form>
    
    <button>Add</button>
    <button>Remove</button>
    <button>update</button>
</body>
</html>