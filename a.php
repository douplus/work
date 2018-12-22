<?php
session_start();

if ($_POST["user"] == ''){
   echo '帳號不能為空<br>';
}
else if ( $_POST["user"] !== '' && $_POST["pwd"] == ''){
   echo '密碼不能為空<br>';
}
else{
$servername = "localhost";
$username = "ccc";
$password = "123";
$database = "staff";
$port = "3306";
$conn = mysqli_connect($servername, $username, $password, $database, $port);
mysqli_query($conn,"SET NAMES utf8");
$sql ="SELECT * FROM `data`";
$result = mysqli_query($conn,$sql);
$i = 0;
while($row = mysqli_fetch_assoc($result)){
   if ($_POST["user"] == $row["name"] && $_POST["pwd"] == $row["password"])
      {    
$i=$i+1;
$lv = $row['lv'];
$_SESSION['id']=$row['id'];
      if ($lv == 1){
         header("Location:boss.php");  
         }
      if ($row['ch'] == 0 && $lv == 0)
         {
         header("Location:b.php");
         }
      else{
         echo "已經完成評量";
         }
      }
   if($i == 1){}
}
if($i==0){
    echo "帳號或密碼錯誤";
}
}

?>