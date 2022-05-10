<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC corp - insert</title>
</head>
<body>
    <?PHP
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
        

        $user_name = $_POST['name'];
        $user_msg = $_POST['message'];

        echo $username."<br/>";
        echo $user_msg;

        $sql = "INSERT INTO msg_board (name, message) VALUES ('$user_name', '$user_msg')";
        $result = mysqli_query($connection, $sql);

        if($result === false){
            echo 'Failed to save the data';
            error_log(mysqli_error($connection));
        }
        else {
            echo 'Data has saved!';
        }

        // Close mysqli connection
        mysqli_close($connection);
        print "<hr/><a href=index.php>Go to Main index page</a>";
    ?>
</body>
</html>