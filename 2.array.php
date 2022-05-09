<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
        //$배열이름 = array();
        /* 
        $fruits = array();
        $fruits[0] = 'apple';
        $fruits[1] = 'banana';
        $fruits[2] = 'orange';

        echo $fruits[0];
        */

        $fruits = array('apple','banana','orange');

        if (isset($fruits[3])){
            echo $fruits[3];
        }
        else {
            echo '과일 배열 세번째 값은 존재하지 않습니다.';
        }
    ?>
    <hr/>
    <h2>for 반복문</h2>
    <?php
        for ($i = 0; $i <count($fruits); $i++){
            echo $fruits[$i].'<br/>';
        }
    ?>
    <h2>foreach 반복문</h2>
    <?php 
        foreach($fruits as $item){
            echo $item.'<br/>';
        }
    ?>
    <h2>연관배열 Associative Array</h2>
    <?php 
        
        /*
        $prices = array();
        $prices['apple'] = 1000;
        $prices['banana'] = 2000;
        $prices['orange'] = 3000;
        */
        $prices = array('apple' => 1000, 'banana' => 2000, 'orange' => 3000);
        
        foreach($prices as $key => $price){
            echo $key. "_".$price.'<br/>';
        }

    ?>
    
</body>
</html>