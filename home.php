<?php 
    $title = 'home';
    include('./inc/header.php'); //오류가 있을 시 뒤에 코드는 계속 실행,                        똑같은 코드 작성시 중복되어도 계속 작동    >> include_once
    require('./inc/functions.php'); //오류시 모든 실행 정지, 데이터베이스와 연동시 보안 문제,   똑같은 파일 실행 불가                      >> require_once
?>
    <pre>
        function 함수 이름(매개변수1, 매개변수2){
            할 일 ...
        }
        함수 이름();
        function class_total(){

        }
        함수 입력, 할 일, 출력

    </pre>
    <?php
        $result = sum(10,20); //global variable 전역변수
        echo $result;
    ?>

    <h2>배열 출력</h2>
    <?php 
        $fruits = ['apple', 'banana', 'mango', 'orange'];
        // echo '<pre>';
        // print_r($fruits);
        // echo '</pre>';

        output($fruits);
    ?>

    <h2>지역변수 vs 전역변수</h2>
    <?php
        function myfunc(){
            $var = 10; //지역변수, 함수 외부에서 출력x
            echo "{$var}";
        }
        myfunc();
    ?>
    <hr>
    <?php
        $var2= 20;
        function myfunc2(){
            global $var2;
            echo "{$var2}";
            echo "{$GLOBALS['var2']}";
        }
        myfunc2();
    ?>

    <h2>정적 변수</h2>
    <?php 
        increment();
        increment();
        increment();
    ?>

    <?php 
        include('inc/footer.php');
    ?>
