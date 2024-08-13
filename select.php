<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error Based String</title>
</head>
<body>
    <div style=" margin-top:70px;color:#FFF; font-size:23px; text-align:center">z
        <h1><span class="style4">Error based string</span> <br>

        <font size="3" color="#666666">
            <?php
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $quary = "SELECT * FROM users WHERE id='$id' LIMIT 0,1";
                    $result = mysqli_query($connection, $quary);
                    if(!$result) {
                        die("Database Quary Failed".
                        print_r(mysqli_error($connection))
                    );
                    }
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<font color= "#0000ff">';
                        echo 'Your ID:'. ' - ' . $row['id'];
                        echo "<br>";
                        echo 'Your User Name:' . ' - ' . $row['name'];
                        echo "</font";
                    }
                }
            ?>
</body>             
</html>