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

  $passs=$_POST['pass'];

  $con=mysqli_connect($host,$user,$pass,$db);

  if(!$con)
  {
      echo "Connection Failed due to ".sqli_error();
  }
  
  if ($passs==1)
  {
    $sql="insert into passnumber(pass)values('$passs');";
    $query=mysqli_query($con,$sql);

    if ($query)
    {
      header("Location:pass1.php");
    }
  }
  else if ($passs==2)
  {
    $sql="insert into passnumber(pass)values('$passs');";
    $query=mysqli_query($con,$sql);

    if ($query)
    {
      header("Location:pass2.php");
    }

  }
  else if ($passs==3)
  {
    $sql="insert into passnumber(pass)values('$passs');";
    $query=mysqli_query($con,$sql);

    if ($query)
    {
      header("Location:pass3.php");
    }
  }
}  
?>

<html>
<head>
    <title>Document</title>
    <style>
        fieldset{
            border-color:white;
        }
        </style>
</head>
<body bgcolor="orange">
<a href="logout.php">
        <button>LOGOUT</button>
</a> 
<center>
<h1>Enter Number of Passanger</h1>
<form method="POST">
<fieldset><legend>Number of Passenger</legend> <br><br>
<label>How many Passenger: </label>
<input type="number" name="pass"></input><br><br>
<input type="submit" name="submit"></input><br><br>
</fieldset>
</form>
</center>
</body>
</html>