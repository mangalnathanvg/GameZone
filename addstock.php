<!DOCTYPE html>
<html>
<head>
	<title>Add stock</title>
	 <style type="text/css">
    .container {
        width: 500px;
        clear: both;
    }
    .container input {
    	font-size: 20px;
        width: 100%;
        clear: both;
    }

    </style>
	<link rel="stylesheet" type="text/css" href="addstock.css">
</head>
<body>

<h1 class="head">Enter details of item to enter in stock</h1>
<p style="margin-left: 32%">Note: To update existing entries, just fill the Product ID and Quantity details.</p>

<div class="formadd">
<div class="container">
           <form action="addstocktodb.php" method="POST">
           <p>
           	  <label>Enter Product ID</label>
           	  <input type="number" id="pid" name="pid" />
           </p>
           <p>
           	  <label>Enter Product Name</label>
           	  <input type="text" id="pname" name="pname">
           </p>
           <p>
           	  <label>Enter Quantity</label>
           	  <input type="number" id="pquant" name="pquant">
           </p>
           <p>
           	  <label>Enter Price of each unit</label>
           	  <input type="number" id="pprice" name="pprice">
           </p>
           </div>
           <p>
           	  <input type="submit" class="myButton1" value="Add To Stock">
           </p>
           </form>
      	    
      </div>
</body>
</html>