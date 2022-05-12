<?php
    function output($value){
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }

    function authenticate_user($email, $password){
        if($email == USER_NAME && $password == PASSWORD){
            return true;
        }
    }

    function redirect($url){
        header("Location: $url");
        die();
    }
    //exit(); : 에러메세지 출력X, 종료
    //die(); : 에러메세지 풀력 O, 종료

    function is_user_authenticated(){
        return isset($_SESSION['email']);
    }
    function ensure_user_is_authenticated(){
        if(!is_user_authenticated()){
            redirect('login.php');
            die();
        }
    }
?>