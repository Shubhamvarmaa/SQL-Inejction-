<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vulnerable Insert Code</title>
</head>
<body>
    <div style="margin-top:70px;color:#FFF; font-size:23px; text-align:center">
        <h1><span class="style4">Vulnerable Insert Code</span> <br>

        <font size="3" color="#666666">
            <?php
                if (isset($_GET['submit'])) {
                    $username = $_GET['user'];
                    $email = $_GET['email'];

                   $query = "INSERT INTO users (name, email) VALUES ('$username', '$email')";

                    $result = mysqli_query($connection, $query);
                    if (!$result) {
                        die("Database Query Failed: " . mysqli_error($connection));
                    } else {
                        echo "<font color='#00ff00'>User inserted successfully!</font>";
                    }
                }
            ?>

            <form method="GET" action="">
                <label for="user">User:</label>
                <input type="text" id="user" name="user" required>
                <br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
                <br>
                <input type="submit" name="submit" value="Submit">
            </form>
            
        </font>
    </div>
</body>             
</html>
