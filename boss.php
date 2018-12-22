
<?php
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
if($row['lv'] == 1)
{}
    echo '<table width=300px><tr><td width=20%>'.$row['name'].'</td><td width=20%>'.$row['score'].'</td>';
if($row['ch']==1)
{
    echo "<td>已完成評量</td></tr></table><br>";
}
else
{
    echo "<td>未完成評量</td></tr></table><br>";
}
}










?>