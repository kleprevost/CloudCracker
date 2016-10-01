<?php
$dbhost="db";
$dbuser="dbuser";
$dbpass="dbpass";
$dbname="db";
$dblink = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Error " . mysqli_connect_error($dblink));
?>