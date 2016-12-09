<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Upload</title>
<style type="text/css">
body{
    background: url("im.jpg");
    background-size: cover;
    background-position: center;
    width: 100%;
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
<a href="house.php">Members details</a>
</div>
<div id="body">
	<table width="80%" border="1">
    <tr>    
    <tr>
    <td>MemberId</td>
    <td>Firstname</td>
    <td>Lastname</td>
    <td>Username</td>
    <td>Password</td>
    <td>E-Mail</td>
    <td>FlatNo</td>
    <td>Contact</td>
    <td>City</td>
    <td>Address</td>
    <td>SqFeet</td>
    <td>Gender</td>
    <td>Room</td>    
    </tr>
    <?php
	$sql="SELECT * FROM register";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['MemberId'] ?></td>
        <td><?php echo $row['Firstname'] ?></td>
        <td><?php echo $row['Lastname'] ?></td>
        <td><?php echo $row['Username'] ?></td>
        <td><?php echo $row['Password'] ?></td>
        <td><?php echo $row['Email'] ?></td>
        <td><?php echo $row['FlatNo'] ?></td>
        <td><?php echo $row['ContactNo'] ?></td>
        <td><?php echo $row['City'] ?></td>
        <td><?php echo $row['Address'] ?></td>
        <td><?php echo $row['SqFeet'] ?></td>
        <td><?php echo $row['Gender'] ?></td>
        <td><?php echo $row['Room'] ?></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>