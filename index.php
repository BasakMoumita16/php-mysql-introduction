<?php

require 'connection.php';
require 'insert.php';


if($_SERVER['REQUEST_METHOD'] == 'POST') datainsert($_POST['fname'] , $_POST['lname'] , $_POST['uname'] , $_POST['gen']  , $_POST['lin'] , $_POST['git'] , $_POST['emil'] , $_POST['ln'] , $_POST['ava'] , $_POST['vid'] , $_POST['qut'] , $_POST['qutauthor']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <form method="Post">
                first_name: <input type="text" name="fname"><br>
                    last_ name: <input type="text" name="lname"><br>
                    username: <input type="text" name="uname"><br>
                    gender: <input type="text" name="gen"><br>
                    linkedin: <input type="text" name="lin"><br>
                    github: <input type="text" name="git"><br>
                    email: <input type="text" name="emil"><br>
                    preferred_language: <input type="text" name="ln"><br>     
                    avatar: <input type="text" name="ava"><br>
                    video: <input type="text" name="vid"><br>
                quote: <input type="text" name="qut"><br>
                quote_author: <input type="text" name="qutauthor"><br>
                <input type="submit" value="Submit">
    </form>
</body>
</html>