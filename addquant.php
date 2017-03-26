<!DOCTYPE html>
<html>
<head>
  <title>Add Quantity</title>
  <link rel="stylesheet" type="text/css" href="rmstck.css">
  <style type="text/css">
     .container {
      margin-left: 36%;
      margin-top: 6%;
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

<h1 id="head">Employee Stock</h1>
<div class="tablestock">
 <?php
   mysql_connect("localhost","root","");
      mysql_select_db("mvg");
      $result=mysql_query("select * from employeestock") or die(mysql_error());

      
   echo "<table border='1'><tr><th>Product ID</th><th>Product Name</th><th>Quantity</th><th>Price</th></tr>";
while($row = mysql_fetch_array($result))
  {
   print "<tr><td>".$row['Product_ID']."</td><td>".$row['Product Name']."</td><td>".$row['Quantity']."</td><td>".$row['Price']."</td></tr>";
  }
echo "</table>";
?>
</div>
>
 <form action="addquanttodb.php" method="POST">
           <p>
           <div class="container">
              <label>Enter ID of Product to add to stock</label>
              <input type="number" id="prmid" name="prmid" />
           </p>
            <label>Enter Quantity of Product to add to stock</label>
              <input type="number" id="prmquant" name="prmquant" />
           </p>
           </div>

            <input type="submit" class="myButton4" name="rmvstckbtn" value="Add Quantity" />
           </form>



</body>
</html>







































