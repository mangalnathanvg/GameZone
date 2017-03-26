<!DOCTYPE html>
<html>
<head>
	<title>CART!</title>
	<link rel="stylesheet" type="text/css" href="displaycart.css">
</head>
<body>
<h1 style="margin-left:44%;font-size: 50px;">Your Cart</h1>
<div style="margin-left:33%;margin-top:5%;font-size:30px;" class="tablestock">
<?php
   mysql_connect("localhost","root","");
      mysql_select_db("mvg");
      $result=mysql_query("SELECT * FROM customercart") or die(mysql_error());

      
   echo "<table border='1'><tr><th>Product ID</th><th>Product Name</th><th>Quantity</th><th>Price</th></tr>";
while($row = mysql_fetch_array($result))
  {
   print "<tr><td>".$row['Product_ID']."</td><td>".$row['Product Name']."</td><td>".$row['Quantity']."</td><td>".$row['Price']."</td></tr>";
  }
echo "</table>";
?>
</div>

<form action="removefromcart.php" method="POST">
	<input type="submit" name="rmcrt" class="rmcrt" value="Remove from Cart">
</form>

<form action="custacc.php">
	<input type="submit" name="redirectcustacc" class="rdrcrt" value="Back to Menu">
</form>
</body>
</html>