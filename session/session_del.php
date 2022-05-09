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

        session_unset();

    ?>
</body>
</html>