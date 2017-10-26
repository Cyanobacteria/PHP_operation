<?php
CreateUser($_POST['username'],$_POST['password'],$_POST['submit']);
//
function ConnectToDB($target,$account,$password,$table){
   // $connection = mysqli_connect('localhost','root','66','loginapp');
    $connection = mysqli_connect($target,$account,$password,$table);
        //確認資料庫連結成功或失敗
    if($connection){
        echo "connected!!";
        return $connection;
    } else{
        die("filed");
    }
}
function DBResult($connection,$query){
        //存入DB(這一句就會存入了)
        $result = mysqli_query($connection, $query);
        //確認存入為真
        if(!$result){
            die('Query FAILED!!' . mysqli_error());
        }
}
//CreateUser(名稱,密碼);
function CreateUser($username,$password,$submit){
    //確定資料有送出成功
    if(isset($submit)){
        $connection = ConnectToDB('localhost','root','66','loginapp');
        //SQL語句
        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password') ";
        DBResult($connection,$query);
    }
}




?>


<!DOCTYPE>

<html lang="en">
<head>
<meta charset="UTF-8">

<title>Document</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

<div class="container">

    <div class="col-sm-6">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">

        </form>
    </div>

</div>






</body>

</html>
