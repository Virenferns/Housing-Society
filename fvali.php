<?php include 'config.php'; ?>

<?php
//create variable
$a=$_POST['Name'];
$b=$_POST['Email'];
$c=$_POST['Comment'];

//Execute the query
$query="INSERT INTO feedback(Name,Email,Comment)
VALUES('$a','$b','$c')";
mysql_query($query);
echo "reviews";
header("location: viewfeedback.php");
?>

