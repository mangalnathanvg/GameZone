<?php
error_reporting(0);
//Get values passed from login.php file
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $type = "Customer";
  //to prevent mysql injection
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);

  //connect to the server and select database
  mysql_connect("localhost","root","");
  mysql_select_db("mvg");
//Query the database for user

  $result = mysql_query("select * from betterusers where Username = '$username' and Password ='$password' and Type = '$type' ") or die(mysql_error());

  $row = mysql_fetch_array($result);

  if($row['Username']==$username && $row['Password']==$password){
     header("Location: http://localhost/DBMS/custacc.php");
  }else{

  	echo "<h1 style='font-size:100px; margin-left: 25%; margin-top:20%;'>No such Customer!</h1>";
  }
 
?>