<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC 게시판</title>
</head>
<body>
    <h1>게시판</h1>
    <h2>글 목록</h2>
    <?php
        $server = 'localhost';
        $username = 'root';
        $password = 'jj0709ang25';
        $database = 'abc_corp';
        // $connection = new mysqli($server, $username, $password, $database, 3307) or die("not connected");
        $connection = mysqli_connect($server, $username, $password, $database, 3307);
        if(!$connection){
            echo 'Connect Error'.mysqli_connect_error();
        }
        else{
            echo "connected <br/>";
        }

        //msg_board table에서 글 조회
        $select = "SELECT * FROM msg_board";
        $result = mysqli_query($connection, $select);
        $list = '';

        /* 출력 방법
            echo : 값을 그대로 출력
            print : 값을 그대로 출력
            print_r : 배열, 객체 모양 그대로 출력
            var_dump : print_r 상세하게 출력
            printf
        */
        /*
            $row : mysqli_fetch_array($result)의 값을 배열로 저장... (인덱스 활용 가능 0,1,2...)
        */
        while($row = mysqli_fetch_array($result)){
            $list = $list."<li> {$row['number']}: <a href=\"view.php?number={$row['number']}\"> {$row['name']} </a></li>";
        }
        echo "<ul>".$list."</ul>";

    ?>
    <hr>
        <p><a href="write.php">글쓰기</a></p>
    <hr>
    <h2>글 검색</h2>
        <form action="search.php" method="post">
            <h3>검색할 키워드를 입력하세요</h3>
            <p>
                <label for="search">키워드: </label>
                <input type="text" id="search" name="skey">
            </p>
            <input type="submit" value="Search" id="submitBtn">
        </form>
    <hr>
    <h2>글 삭제</h2>
        <form action="delete.php" method="post">
            <h3>삭제할 메세지 번호를 입력하세요</h3>
            <p>
                <label for="msgdel">번호: </label>
                <input type="text" id="msgdel" name="delnum">
            </p>
            <input type="submit" value="Delete" id="submitBtn">
        </form>
</body>
</html>