<?php 



//連接資料庫用
function ConnectToDB($target,$account,$password,$db){
   // $connection = mysqli_connect('localhost','root','','loginapp');
    $connection = mysqli_connect($target,$account,$password,$db);
        //確認資料庫連結成功或失敗
    if($connection){
        echo "連接成功!";
        return $connection;
    } else{
        die("連接失敗!");
    }
}

//存入資料用
function DBResult($connection,$query){
        //存入DB(這一句就會存入了)
        $result = mysqli_query($connection, $query);
        //確認存入為真

        if(!$result){
            die('存入失敗!! 錯誤提示：' . mysqli_error());
        }else{
            return $result;
        }
}
/*
function QueryHelper($connection,$query){
    return  DBResult($connection,$query);
    //return $result;
}
*/
function CreateRow($username,$password,$submit){
    if(isset($submit)){
    global $connection;
    $result = DBResult($connection,"INSERT INTO users(username,password) VALUES ('$username', '$password') ");
    }
}
function ShowRows(){
    global $connection;
    $result = DBResult($connection,"SELECT * FROM users");
    return $result;
}

function UpdateRow($id,$username,$password,$submit = true){

    if(isset($submit)){
    global $connection;
    $result = DBResult($connection,"UPDATE users SET username = '$username', password = '$password' WHERE id = $id");
    }



}

function DeleteRow($id,$submit = true){

    if(isset($submit)){
    global $connection;
    $result = DBResult($connection,"DELETE FROM users WHERE id = $id ");
    }

}

//CreateUser(名稱,密碼);

//CreateUser重新寫成CreateData?（寫成比較通用的形式）
/*
function CreateRow($username,$password,$submit){
    //確定資料有送出成功
    if(isset($submit)){
        $connection = ConnectToDB('localhost','root','66','loginapp');
        //SQL語句
        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password') ";
        DBResult($connection,$query);
    }
}

function ShowRow($db,$table){
    $connection = ConnectToDB('localhost','root','66',$db);
    $query = "SELECT * FROM $table";
    $result = DBResult($connection,$query);
      
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
            //var_dump($row);
        }//寫個迴圈全部撈出來
      
    return $result;
}
function UpdateRow(){
}

function DeleteRow(){
}
*/

//怎寫？名子有初步想法
//怎樣會return? 怎樣return 會有害？ 最常用的函式是哪些？

?>

