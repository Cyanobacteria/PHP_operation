<!DOCTYPE>


<html>
<head>
</head>
<body>


<?php
        //'horoscope_judgment.php'
include 'horoscope_judgment.php'; 
//echo judgment(4,18);
//不能重複include？
//var_dump(include 'horoscope_judgment.php');

/*下面這樣也不行,只會顯示第一個include裡面的
if ((include 'horoscope_judgment.php') == TRUE){
echo judgment(4,18);
}
if ((include 'horoscope_judgment.php') == TRUE){
echo judgment(8,18);
}
*/
if (isset($_POST['送出'])){
$month = $_POST['month'];
$day   = $_POST['day'];
$horoscope = judgment($month,$day);
//echo $month;
//echo $horoscope;
//echo "$month月$day日出生的人是,$horoscope座";

echo $month . "月" . $day . "日出生的人是," . $horoscope . "座唷";

}


?>


<form action="horoscope.php" method="post">
月：<input type="text" name="month"><br>
日：<input type="text" name="day"><br>
<input type="submit" name="送出" >
</form>


</body>
</html>
