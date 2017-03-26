<!DOCTYPE html>
<html>
<head>
	<title>Removing from Cart</title>
</head>
<body>
<?php
$cid = $_POST['prmid'];

if ($cid=="") {
	echo "<h1 style='margin-left:35%;font-size:40px;'>Enter Valid entries. Redirecting to Menu page.....</h1>";
	echo "<script>setTimeout(\"location.href = 'http://localhost/DBMS/custacc.php';\",2000);</script>";
}else{
   mysql_connect("localhost","root","");
   mysql_select_db("mvg");
   $result = mysql_query("select * from customercart where Product_ID = '$cid'") or die(mysql_error());
   $row=mysql_fetch_array($result);

   $pquant=$row['Quantity'];
   
$result1 = mysql_query("select * from employeestock where Product_ID = '$cid'") or die(mysql_error());
$row1=mysql_fetch_array($result1);

$cquant = $row1['Quantity'];
$newquant = $pquant+$cquant;

mysql_query("update employeestock set Quantity = '$newquant' where PRODUCT_ID='$cid'");
mysql_query("delete from customercart where Product_ID='$cid'");
echo "Removed from cart. Displaying Cart.....";
echo "<script>setTimeout(\"location.href = 'http://localhost/DBMS/displaycart.php';\",2000);</script>";
}
?>
</body>
</html>