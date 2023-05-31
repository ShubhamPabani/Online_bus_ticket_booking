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

    $con=mysqli_connect($host,$user,$pass,$db);

    if(!$con)
    {
        echo "Connection Failed due to ".sqli_error();
    }
$sql="SELECT * FROM login WHERE Username ='$username' AND Password='$password'";
  $query=mysqli_query($con,$sql);
  $num=mysqli_num_rows($query);

  if ($num>0)
  {
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['loggin']=true;

    header("Location:welcome.php");
  }
  else
  {
    echo "Invalid Credantials";
  }
}

?>

<html>
    <head>
    <title>Login Page</title>
    <style>
      .container{
        background-color: rgba(0,0,0,0.3);
        width:350px;
        border-radius:5px 50px 5px 50px;
        padding:40px 20px 40px 20px;
      }
      /* form{
   
        background-image:url("busimg.jpg");
        border-style:solid;
        background-attachment:fixed;
        background-size:cover;
     
        padding:30px 40px 20px 40px;
        width:350px;
        border-radius:5px 40px 5px 50px;
        font-size:20px;
   
      } */
      label{
        padding:80px 30px 40px 20px;; 
        font-weight:bold;
        
      }
      input{
      
        font-weight:bold;
        border: 2px;
        border-style:solid;
        height:25px;
        background:transparent;
       font-size:15px;
       color:white;
      }
      </style>
</head>
<body bgcolor="aqua"><center>
    <h1>Login To Your User Account</h1>
  <div class="container">
    <h3>LOGIN</h3><br><br>
   
    <form  method="POST">
        <label>Username: </label>
        <input type="text" name="username" placeholder="Enter Your Username" required></input><br><br>
        <label>Password: </label>
        <input type="password" name="password" required></input><br><br>
                <input type="submit" name="submit"></input><br><br>
    </div>
</form>   
</center>
</body>
</html>