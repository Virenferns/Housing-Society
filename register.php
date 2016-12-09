<?php include 'config.php'; ?>

<?php
//create variable
$a=$_POST['MemberId'];
$b=$_POST['Firstname'];
$c=$_POST['Lastname'];
$d=$_POST["Username"];
$e=$_POST['Password'];
$f=$_POST['Email'];
$g=$_POST['FlatNo'];
$h=$_POST['ContactNo'];
$i=$_POST['City'];
$j=$_POST['Address'];
$k=$_POST['SqFeet'];
$l=$_POST['Gender'];
$m=$_POST['Room'];
$n=$_POST['file'];

//Execute the query
$query="INSERT INTO register (MemberId,Firstname,Lastname,Username,Password,Email,FlatNo,ContactNo,City,Address,SqFeet,Gender,Room,file)
VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')";
mysql_query($query);
echo "registration done";
header("location: house.php");

?>