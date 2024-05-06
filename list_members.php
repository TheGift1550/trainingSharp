<?php include ('dbConnection.php'); ?>
<?php
$sql = "SELECT * FROM members";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["role"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>