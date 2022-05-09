<?php 
    session_start(); //세션 시작
    $_SESSION['city'] = 'Seoul';
    $_SESSION['state'] = 'Nowon';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php
        echo '세션이 등록되었습니다. <br/>';

        if(!isset($_SESSION['city'])){
            echo '세션이 등록되어 있지 않습니다. <br/>';
        }
        else{
            echo '등록된 세션은 '.$_SESSION['city'].'입니다. <br/>';
            print_r($_SESSION); // 모든 세션의 정보를 연관 배열 형태로 출력
        }
    ?>
</body>
</html>