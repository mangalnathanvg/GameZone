<!DOCTYPE html>
<html>
<head>
	<title>Adding to Cart</title>
</head>
<body>
<?php
$cid = $_POST['cartid'];
$cquant= $_POST['cartquant'];
if ($cid==""||$cquant=="") {
	echo "<h1 style='margin-left:35%;font-size:40px;'>Enter Valid entries. Redirecting to Menu page.....</h1>";
	echo "<script>setTimeout(\"location.href = 'http://localhost/DBMS/custacc.php';\",2000);</script>";
}else{
   mysql_connect("localhost","root","");
   mysql_select_db("mvg");
   $result = mysql_query("select * from employeestock where Product_ID = '$cid'") or die(mysql_error());
   $row=mysql_fetch_array($result);

   $pid = $row['Product_ID'];
   $pname= $row['Product Name'];
   $pquant=$row['Quantity'];
   $pprice=$row['Price'];

mysql_query("insert into customercart values('$pid','$pname','$cquant','$pprice')");
$newquant = $pquant-$cquant;
mysql_query("update employeestock set Quantity = '$newquant' where PRODUCT_ID='$cid'");

echo "Added to Cart. Displaying.....";
echo "<script>setTimeout(\"location.href = 'http://localhost/DBMS/displaycart.php';\",2000);</script>";
}
?>
</body>
</html>