<?php 
    $title = 'Login';
    include('header.php');
    require_once('function.php');
    /*
    //$_SERVER['SERVER_NAME'] >> www.abc.com
    //$_SERVER['USER_AGENT']
    //$_SERVER['PHP_SELF'] >> if: www.abc.com/login.php >> result: login.php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // echo $_POST['email'];
        output($_POST);
    }
    */

    if(isset($_POST['login'])){
        // output($_POST);

        //php.net/filter_input 참조
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if($email == false){
            $status = '이메일 형식에 맞게 입력해주세요.';
        }
    }
?>

<form action="" method="POST">
    <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
    </p>
    <p>
        <input type="submit" value="Login" name="login">
    </p>
</form>
<div class="error">
    <p>
        <?php 
            if(isset($status)){
                echo $status;
            }
        ?>
    </p>
</div>


<?php 
    include('footer.php');
?>