<?php
$pid=$_POST['prmid'];
$pquant=$_POST['prmquant'];

if ($pid=="") {
	echo "<h1 style='margin-left:35%;font-size:40px;'>Enter Valid entries. Redirecting to Menu page.....</h1>";
	echo "<script>setTimeout(\"location.href = 'http://localhost/DBMS/empacc.php';\",2000);</script>";
}
else{
mysql_connect("localhost","root","");
mysql_select_db("mvg");

$result = mysql_query("select * from employeestock where Product_ID= '$pid'");
	$row=mysql_fetch_array($result);
	$newvalue = $row['Quantity'] + $pquant;
    mysql_query("update employeestock set Quantity = '$newvalue' where Product_ID = '$pid'");
}
header("Location:http://localhost/DBMS/empacc.php");

?>