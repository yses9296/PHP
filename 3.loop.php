<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <h1>Loop</h1>

    <hr/>

    <h1>While</h1>
    <pre>
        while(조건식){
            조건의 결과 참일 때 반복할 코드...
        }
    </pre>
    <?php 
        $i = 0;
        while($i < 5){
            echo ($i++).'<br/>';
        }
    ?>

    <hr/>

    <h1>do/while</h1>
    <pre>
        do{
            조건의 결과 참일 때 반복할 코드...
        } while(조건식)
    </pre>
    <?php
        $i = 0;
        do{
            echo ($i++).'<br/>';
        }while($i < 5);
    ?>
    <hr/>

    <h1>for</h1>
    <pre>
        for (초기값; 조건식; 증감){
            조건이 참일 때 반복할 코드...
        }
    </pre>
    <?php 
        for ($i = 0; $i < 5; $i++){
            // echo $i.'<br/>';
            echo "{$i}<br/>";
        }
    ?>
    <hr/>

    <h1>foreach</h1>
    <pre>
        foreach(배열 as 값을 저장할 변수){
            반복할 코드...
        }
    </pre>
    <?php 
        $results = array(0,2,4,6,8);
        foreach($results as $items){
            echo $items.'<br/>';
        }
    ?>

    <hr/>
    <?php 
        $scores = array(
            'Korean' => 80,
            'Math' => 90,
            'Engligh' => 70,
            'History' => 100,
            'Science' => 60
        );

        foreach($scores as $subject => $score){
            echo $subject.": ".$score."<br/>";
        }
    ?>
</body>
</html>