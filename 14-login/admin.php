<?php 
    session_start();
    require_once('config.php');
    require_once('function.php');


    ensure_user_is_authenticated();
        
    echo $_SESSION['email'];
    include('header.php');
?>

<a href="logout.php">LOGOUT</a>

<?php 
    include('footer.php');
?>