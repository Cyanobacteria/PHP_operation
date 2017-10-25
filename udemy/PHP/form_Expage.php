<!DOCTYPE>

<html>
<head>
</head>
<body>
<?php

if(isset($_POST['送出'])) {
echo "haha";

$username = $_POST['username'];
$password = $_POST['password'];

echo "<br>使用者名稱是$username<br>" . "密碼是$password<br>";

}

?>
<a href="form.php"><h2>back</h2></a>
</body>
</html>
