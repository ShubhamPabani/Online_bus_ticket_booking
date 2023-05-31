<?php
include('common.php');

if (isset($_POST['submit']))
{
    $host='localhost';
    $user='root';
    $pass='';
    $db='db';

    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    

    $con=mysqli_connect($host,$user,$pass,$db);

    if(!$con)
    {
        echo "Connection Failed due to ".sqli_error();
    }
    if ($password==$cpassword)
    {
  $sql="insert into login(Username,Password,Email,Number)values('$username','$password','$email','$number');";
  $query=mysqli_query($con,$sql);

  if ($query)
  {
    header("Location:login.php");
  }
  else
  {
    echo "Not Inserted";
  }
}
else 
echo "Alert...! Type the same Password";

}
?>

<html>
    <head><title>Sign Up Page</title>
    <style>
        .banner
        {
            width:100%;
            height:100%;
            background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75));
            background-size:cover;
            background-position:center;
            text-align:center;
        }
        form
        {
            border:2px solid orange;
            border-radius:25px;
            margin:30px;
            width:400px;
            padding: 90px 60px 20px 40px;
            display:inline-block;
            text-align:right; 
        }
        .content
        {
         padding:30px;
         width:320px;
        }
        h1
        {
          padding:20px;
        }
        
        </style>
</head>
<body >
<div class="banner">
    <h1>Create Your User Account</h1>
    <form  method="POST">
      <div class="content">
        <label>Username: </label>
        <input type="text" name="username" required></input><br><br>
        <label>Password: </label>
        <input type="password" name="password" required></input><br><br>
        <label>Confirm Password: </label>
        <input type="password" name="cpassword" required></input><br><br>
        <label>Email: </label>
        <input type="email" name="email" required></input><br><br>
        <label>Mobile No: </label>
        <input type="text" name="number" required></input><br><br>
        <input type="submit" name="submit"></input><br><br>
      </div>
</form>

      </div>
<body>
    </html>

