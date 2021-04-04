<?php
$con = mysqli_connect("localhost","root","");
$dbname = "artikel_db";
mysqli_select_db($con, $dbname);
if ($con) {
		echo "Database terhubung";
		}
?>