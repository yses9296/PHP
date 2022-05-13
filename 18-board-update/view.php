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
        echo "connected <br/>";
    }

    //msg_board table에서 글 조회
    $view_num = $_GET['number'];
    $select = "SELECT * FROM msg_board WHERE number = $view_num";
    $result = mysqli_query($connection, $select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC corp - View </title>
</head>
<body>
    <h1>게시판</h1>
    <h2>글 내용</h2>
    <?php 
        if($row = mysqli_fetch_array($result)){

        }
    ?>
    <h3>글번호: <?= $row['number'] ?> <br/> 글쓴이 :<?= $row['name'] ?> </h3>
    <div><?= $row['message'] ?></div>
    <?php 
        mysqli_close($connection);
    ?>
    <p>
        <a href="index.php">Go to Main index page</a>
        <a href="update.php?number=<?= $row['number'] ?>">Update the data</a>
    </p>
</body>
</html>