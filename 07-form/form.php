<?php
    $title = 'login';
    include_once('inc/header.php');
    require_once('inc/functions.php');
?>

<form action="request.php" method="post">
    <p>
        <label for="userName">Name</label>
        <input type="text" name="username" id="userName">
    </p>
    <p>
        <label for="userEmail">Email</label>
        <input type="email" name="useremail" id="userEmail">
    </p>
    <p>
        <input type="submit" value="login">
    </p>
</form>


<?php 
    include('inc/footer.php');
?>