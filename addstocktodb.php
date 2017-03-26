

<?php
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$pquant=$_POST['pquant'];
$pprice=$_POST['pprice'];

mysql_connect("localhost","root","");
mysql_select_db("mvg");
mysql_query("INSERT INTO employeestock VALUES('$pid','$pname','$pquant','$pprice')");

header("Location:http://localhost/DBMS/empacc.php");
?>