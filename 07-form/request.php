<?php
    $title = 'login';
    include_once('inc/header.php');
    require_once('inc/functions.php');
?>

    <?php
        $name = $_POST["username"];
        $email = $_POST["useremail"];

        echo 'Hello, '.$name.'! Your email is '.$email;
    ?>

<?php 
    include('inc/footer.php');
?>