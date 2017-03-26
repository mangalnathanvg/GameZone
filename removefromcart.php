<!DOCTYPE html>
<html>
<head>
	<title>Removing from cart</title>
	<link rel="stylesheet" type="text/css" href="removefromcart.css">
	 <style type="text/css">
     .container {
      margin-left: 36%;
      margin-top: 5%;
        width: 500px;
        clear: both;
    }
    .container input {
      font-size: 20px;
        width: 100%;
        clear: both;
    }
  </style>
</head>
<body>
<h1 style="margin-left:40%;font-size: 50px;">Remove from Cart</h1>
<div style="margin-left:35%;margin-top:5%;font-size:30px;" class="tablestock">
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

<form action="removefromcartdb.php" method="POST">
           <p>
           <div class="container">
              <label>Enter ID of Product to remove</label>
              <input type="number" id="prmid" name="prmid" />
           </p>
           </div>

            <input type="submit" class="myButton4" name="rmvstckbtn" value="Remove From Cart" />
           </form>
 <form action="custacc.php">
 	<input type="submit" name="bckmn" class="bckmn" value="Back to Menu" />
 </form>

   
</body>
</html>