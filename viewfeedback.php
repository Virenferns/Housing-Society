<?php include_once 'config.php';?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Feedback</title>
<style type="text/css">
body{
    background: url("im.jpg");
    background-size: cover;
    background-position: center;
    height: 657px;
}
.header a{
    font-size: 40px;
    font-family: proxima-semibold;
}

</style>
</head>
<body>
<div class="header">
<a href="house.php">Reviews</a>
</div>
<div id="body">
	<table width="80%" border="1">
     
    <tr>
    <td>Name</td>
    <td>Email</td>
    <td>Comment</td>
    </tr>
    <?php
	$sql="SELECT * FROM feedback";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['Email'] ?></td>
        <td><?php echo $row['Comment'] ?></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>