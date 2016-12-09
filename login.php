<?php
$host="localhost";
$user = "root";
$pwd ="";
$db = "housing";

mysql_connect($host, $user, $pwd);
mysql_select_db($db);
if (isset($_POST['Username'])) 
  {
    
    $user=$_POST['Username'];
    $pwd=$_POST['Password'];

    $sql = "SELECT * from login WHERE Username = '".$user."' AND Password = '".$pwd."' LIMIT 1";
    $res = mysql_query($sql);
    if (mysql_num_rows($res)==1) 
    {
      header("Location: house.php");
      
    } 
    else
    {      
      header("Location: login.html");
    }
}
?>



