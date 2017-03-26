<!DOCTYPE html>
<html>
<head>
	<title>Employee Stock</title>
	<link rel="stylesheet" type="text/css" href="empacc.css">
</head>
<body background="D:/XAMPP/htdocs/DBMS/background1.jpg">

<h1 style="color: white;" id="head">Employee Stock</h1>
<div style="margin-left:33%;margin-top:5%;font-size:30px;" class="tablestock">
	<?php
      mysql_connect("localhost","root","");
      mysql_select_db("mvg");
      $result=mysql_query("SELECT * FROM employeestock") or die(mysql_error());

      
   echo "<table border='1'><tr><th>Product ID</th><th>Product Name</th><th>Quantity</th><th>Price</th></tr>";
while($row = mysql_fetch_array($result))
  {
   print "<tr><td>".$row['Product_ID']."</td><td>".$row['Product Name']."</td><td>".$row['Quantity']."</td><td>".$row['Price']."</td></tr>";
  }
echo "</table>";
	 ?>

</div>

<form action="addstock.php">
  <input type="submit" class="myButton3" name="addstckbtn" value="Add Stock" />
</form>
<form action="addquant.php">
     <input style="margin-top: 1%;" type="submit" class="myButton3" value="Add Quantity" />
</form>
<form style="margin-left: -38px;margin-top: -1%;" action="removestock.php">
  <input type="submit" class="myButton4" name="rmvstckbtn" value="Remove Stock" />
</form>

<form action="starting.html" method="POST">
      <input style="margin-top: 3%;margin-left:46%;" type="submit" class="myButton3" value="Log Out" />
</form>

</body>
</html>