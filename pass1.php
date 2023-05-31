<?php 
session_start();

if (!isset($_SESSION['loggin']) || $_SESSION['username']!=true )
{
    header("Location:login.php");
}//location page should be set here
?>

<?php
if (isset($_POST['submit']))
{
  $host='localhost';
  $user='root';
  $pass='';
  $db='db';

  $passname=$_POST['passname'];
  $passage=$_POST['passage'];

  $con=mysqli_connect($host,$user,$pass,$db);

  if(!$con)
  {
      echo "Connection Failed due to ".sqli_error();
  }
 
  $sql="insert into passdetail(passname,passage)values('$passname','$passage');";
  $query=mysqli_query($con,$sql);
  
  if ($query)
  {
    header("Location:confirm.php");
  }
  else
  {
    echo "Error";
  }
}
  ?>

<html>
    <head></head>
    <body bgcolor="orange">
    <a href="logout.php">
        <button>LOGOUT</button>
</a> 
        <center>
        <h1>Enter the Details of 1 Passenger </h1>
            <form method="POST">
                <label>Passenger Name: </label>
                <input type="text" name="passname"></input><br><br>
                <label>Passenger Age: </label>
                <input type="number" name="passage"></input><br><br>
                <input type="submit" name="submit"></input>
</form>
</center>
</body>
<html>