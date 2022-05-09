<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>
<body>
    <?php 
        /*
        $result = 1 < 3; //조건이 true일 시 출력O, false일 시 출력X

        echo $result == true;
        */
        $first_name = 'eunseo';
        $last_name = 'choi';
        /*
            조건문
            && = and 모두 참일 때 true
            || = or 적어도 하나이상 참일 때 true
        */ 
        if ($first_name == 'eunseo' && $last_name == 'choi'){
            echo '모든 조건이 참입니다.';
        }
        else if ($first_name == 'eunseo' || $last_name == 'choi'){
            echo '적어도 하나의 조건은 참입니다.';
        }
        else{
            echo '모든 조건이 거짓입니다.';
        }
    ?>
</body>
</html>