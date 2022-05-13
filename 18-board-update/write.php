<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC 게시판 - 글쓰기</title>
    <style>
        .container {
            width: 800px;
            margin: 0 auto;
        }
        label {
            display: inline-block;
            width: 100px; 
            text-transform: uppercase;
        }
        #name {
            width: 250px;
        }
        #message {
            width: 250px;
            height: 100px;
        }
        #submitBtn {
            display: block;
            width: 80px;
            font-size: 1em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>글쓰기</h1>
        <form action="insert.php" method="post">
            <p>
                <label for="name">name: </label>
                <input type="text" id="name" name="name">
            </p>
            <p>
                <label for="message">message: </label>
                <textarea id="message" name="message" cols="30" rows="10"></textarea>
            </p>
            <input type="submit" value="Upload" id="submitBtn">

        </form>
    </div>
</body>
</html>