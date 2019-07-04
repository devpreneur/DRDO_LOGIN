
<?php
include ("connection.php");
?>
<html>
<head>
</head>
<body>
<form action="" method="GET">
First Name<input type="text" name="FirstName" value=""/><br><br>
Last Name<input type="text" name="LastName" value=""/><br><br>
<input type="submit" value="submit"/>

</form>
<?php
$FN=$_GET['FirstName'];
$LN=$_GET['LastName'];

$query="INSERT INTO DATA VALUES ('$FN','$LN')";
$data1=mysqli_query ($conn, $query);

if($data1)
{
	echo "Data Inserted Into Database";
}
?>