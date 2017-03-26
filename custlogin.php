<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="custlogin.css">
</head>
<body>
        <h1>Customer Login</h1>
      <div id="frm">
           <form action="custprocesslogin.php" method="POST">
           <p>
           	  <label>Username:</label>
           	  <input type="text" id="user" name="user" />
           </p>
           <p>
           	  <label>Password:</label>
           	  <input type="password" id="pass" name="pass">
           </p>
           <p>
           	  <input type="submit" id="btn" value="Login">
           </p>
      	    
      </div>

</body>
</html>