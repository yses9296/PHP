<?php
    $server = 'localhost';
    $username = 'root';
    $password = 'jj0709ang25';
    $database = 'abc_corp';
    // $connection = new mysqli($server, $username, $password, $database, 3307) or die("not connected");
    $connection = mysqli_connect($server, $username, $password, $database, 3307);
    if(!$connection){
        echo 'Connect Error'.mysqli_connect_error();
    }
    else{
        echo "connected ! <br/>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC corp - Search</title>
</head>
<body>
    <h2>Result: </h2>
    <?php 
        $user_skey = $_POST['skey'];

        $select = "SELECT * FROM msg_board WHERE message LIKE '%$user_skey%'";
        $result = mysqli_query($connection, $select);
        $list = '';
        while($row = mysqli_fetch_array($result)){
            $list = $list."<li> {$row['number']}: <a href=\"view.php?number={$row['number']}\"> {$row['name']} </a></li>";
        }
        echo "<ul>".$list."</ul>";

        mysqli_close($connection);
    ?>

    <p>
        <a href="index.php">Go to Main index page</a>
    </p>
</body>
</html>