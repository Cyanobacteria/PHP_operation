<?php
include 'functions.php';
include 'db.php';
/*
CRUD

CreateRow();
ShowRows();
UpdateRow();
DeleteRow();

四個完成

等前端寫好後就可以直接拿來用

*/
CreateRow($_POST['username'],$_POST['password'],$_POST['submit']);
//mysqli_query($connection,'DELETE FROM users'); 注意砍全部喔!!無法回復的
//UpdateRow(44,"migi","haha"); 完成！！
//DeleteRow(46);


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
      $result = ShowRows();
      
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
            //var_dump($row);
        }
 
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
