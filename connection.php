<?php
$SETTINGS["servername"]='localhost';
$SETTINGS["username"]='root';
$SETTINGS["password"]='';
$SETTINGS["dbname"]='drdo_test';

$conn=mysqli_connect($SETTINGS["servername"],$SETTINGS["username"],$SETTINGS["password"],$SETTINGS["dbname"]);
if($conn){
	echo "Connection is Ok!";
}
else
{
	echo "Not Ok!";
}
            //$conn=  mysqli_query($conn, "select * from data");

       ?>