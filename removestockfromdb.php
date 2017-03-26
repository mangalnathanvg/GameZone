<?php
$prmid=$_POST['prmid'];


if ($prmid=="") {
	echo "<h1 style='margin-left:35%;font-size:40px;'>Enter Valid entries. Redirecting to Menu page.....</h1>";
	echo "<script>setTimeout(\"location.href = 'http://localhost/DBMS/empacc.php';\",2000);</script>";
} else{

mysql_connect("localhost","root","");
mysql_select_db("mvg");
mysql_query("DELETE FROM employeestock WHERE Product_ID = $prmid");

header("Location:http://localhost/DBMS/empacc.php");
}

?>