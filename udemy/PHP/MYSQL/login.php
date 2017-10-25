<?php
if(isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password'];

//echo $username;
//echo $password;

$connection = mysqli_connect('localhost','root','66','loginapp');

if($connection){

echo "connected!!";

} else{
die("filed");
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
