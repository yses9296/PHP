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
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC 게시판 - Update</title>
    <style>
        .container {
            width: 800px;
            margin: 0 auto;
        }
        label {
            display: inline-block;
            width: 100px; 
            text-transform: uppercase;
        }
        #name {
            width: 250px;
        }
        #message {
            width: 250px;
            height: 100px;
        }
        #submitBtn {
            display: block;
            width: 80px;
            font-size: 1em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>수정하기</h1>
        <?php 
            if($row = mysqli_fetch_array($result)){

            }
        ?>

        <form action="insert_update.php" method="post">
            <input type="hidden" name="number" value="<?= $view_num ?>">
            <p>
                <label for="name">name: </label>
                <input type="text" id="name" name="name" value="<?= $row['name'] ?> ">
            </p>
            <p>
                <label for="message">message: </label>
                <textarea id="message" name="message" cols="30" rows="10"><?= $row['message']?></textarea>
            </p>
            <input type="submit" value="Upload" id="submitBtn">

        </form>
        <?php 
            mysqli_close($connection);
        ?>
        <p>
            <a href="index.php">Go to Main index page</a>
        </p>
    </div>
</body>
</html>