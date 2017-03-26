<!DOCTYPE html>
<html>
<head>
  <title>Customer Menu</title>
  <link rel="stylesheet" type="text/css" href="custacc.css">

   <style type="text/css">
     .container {
      margin-left: 36%;
      margin-top: 2%;
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
<body background="D:/XAMPP/htdocs/DBMS/background1.jpg">

<h1 style="color: black;" id="head">Customer Menu</h1>
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

<form action="addtocart.php" method="POST">
           <p>
           <div class="container">
              <label>Enter ID of Product to add to cart</label>
              <input type="number" id="cartid" name="cartid" />
              <label>Enter quantity of Product to add</label>
              <input type="number" id="cartquant" name="cartquant" />
           </p>
           </div>

            <input type="submit" class="cartbtn" name="cartbtn" value="Add to Cart" />
           </form>

<form action="displaycart.php" method="POST">
      <input style="margin-top: 3%;" type="submit" class="dcartbtn" name="dcartbtn" value="Display Cart" />
</form>

<form action="starting.html" method="POST">
      <input style="margin-top: 3%;margin-left:46%;" type="submit" class="dcartbtn" name="dcartbtn" value="Log Out" />
</form>

</body>
</html>