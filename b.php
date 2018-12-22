<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="c.php" method="post" accept-charset="UTF-8">
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

echo "<center>員工評量</center>";
while($row = mysqli_fetch_assoc($result)){
   
    if($_SESSION['id'] == $row['id'] )
    {


    }
    else{
echo '<table width=200px><tr><td width=50%>'.$row['name'].'</td><td width=50%>評分:<input type="number" name="_'.$row['id'].'" min="1" max="5" value="1" ></td></tr></table><br>';
    
}
}
?>
<button type="submit" >送出</button>

</form>
</body>
</html>





