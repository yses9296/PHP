<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <h1>문서의 제목</h1>
    <?php 
        //echo 문자열 출력 함수 like printout, WrhiteLine ...

        //변수 선언 : $
        $name = "Student";

        /*
        문자열과 함께 출력할 때
        case 1: 작은따옴표 >>  'Hello'.$변수명
        case 2: 큰 따옴표  >>  "Hello, $변수명"
        */
        echo 'Hello, '.$name;
        echo " 반갑습니다, $name";
    ?>
</body>
</html>