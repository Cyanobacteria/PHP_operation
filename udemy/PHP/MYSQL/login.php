<?php
CreateUser($_POST['username'],$_POST['password'],$_POST['submit']);
/*
ConnectToDB($target,$account,$password,$db); 連接資料庫（就是確定是哪個資料庫而已還沒有確定table）
DBResult($connection,$query); 給定連接好的資料庫，並給定SQL語法來進行操作

*/
function ConnectToDB($target,$account,$password,$db){
   // $connection = mysqli_connect('localhost','root','','loginapp');
    $connection = mysqli_connect($target,$account,$password,$db);
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
        }else{
            return $result;
        }
}
//CreateUser(名稱,密碼);

//CreateUser重新寫成CreateData?（寫成比較通用的形式）
function CreateUser($username,$password,$submit){
    //確定資料有送出成功
    if(isset($submit)){
        $connection = ConnectToDB('localhost','root','','loginapp');
        //SQL語句
        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password') ";
        DBResult($connection,$query);
    }
}

function ShowDataByTable($db,$table){
    $connection = ConnectToDB('localhost','root','',$db);
    $query = "SELECT * FROM $table";
    $result = DBResult($connection,$query);
    return $result;
}   
function UpdateDataByValue(){
}

function DeleteDataByValue(){
}
//怎寫？名子有初步想法
//怎樣會return? 怎樣return 會有害？ 最常用的函式是哪些？

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

    <?php
        while($row = mysqli_fetch_row(ShowDataByTable('loginapp','users'))){
            print_r($row);
        }//寫個迴圈全部撈出來
      

    ?>
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
