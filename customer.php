<?php
require 'conn.php';
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);
if (!$result) {
    die("Error : " . $conn->$conn_error);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Customer</title>
</head>

<body>
    <div class="container">
        <h1>Customer</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">username</th>
                    <th scope="col-4">password</th>
                    <th scope="col-4">gender</th>
                    <th scope="col-4">education</th>
                    <th scope="col-4">email</th>
                    <th scope="col-4">hobby</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["username"] . "</td>" . "<td>" . $row["password"] . "</td>" . "<td>" . $row["gender"] . "</td>" . "<td>" . $row["education"] . "</td>". "<td>" . $row["email"] . "</td>". "<td>" . $row["hobby"] . "</td>". "<td>" . "<a class='btn btn-warning' href='edit.php?username=" . $row["username"] . "'>Edit</a>" . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </tbody>
        </table><br>
        <p>ปล. 0=หญิง,1=ชาย</p>
        <a class="btn btn-success" href='form01.html'>Insert</a>
    </div>
</body>

</html>