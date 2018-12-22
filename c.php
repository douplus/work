<?php
 session_start();
$servername = "localhost";
$username = "ccc";
$password = "123";
$database = "staff";
$port = "3306";
$conn = mysqli_connect($servername, $username, $password, $database, $port);
mysqli_query($conn,"SET NAMES utf8");
$sql ="SELECT * FROM `data`";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
    if($_SESSION['id'] == $row['id']){
        $sid = $_SESSION['id'];
        $sql3 ="UPDATE `data` SET ch = 1 WHERE id = $sid ;";  
        mysqli_query($conn,$sql3);
        }
    else{
$S = $row['score'];    
$id =$row['id'];
$SP=$_POST["_$id"];
$SS = $S+$SP;
$sql2 ="UPDATE `data` SET score = $SS WHERE id = $id ;";
mysqli_query($conn,$sql2);
        }
 }
session_destroy();
header("Location:score.php");
?>

