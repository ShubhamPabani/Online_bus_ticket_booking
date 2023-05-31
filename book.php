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

  $bus=$_POST['bus'];

  $con=mysqli_connect($host,$user,$pass,$db);

  if(!$con)
  {
      echo "Connection Failed due to ".sqli_error();
  }

  if ($bus==Redbus)
  {
    $sql="insert into ticket(Bus,Duration,Time,Price)values('$bus','1 Hour 40 Minutes','15:30 pm','4000')";
    $query=mysqli_query($con,$sql);

    if ($query)
    {
      header("Location:pass.php");
    }
    else 
    {
       
    }
  }
  else if ($bus==Yellowbus)
  {
    $sql="insert into ticket(Bus,Duration,Time,Price)values('$bus','2 Hour 15 Minutes','18:00 pm','3000')";
    $query=mysqli_query($con,$sql);

    if ($query)
    {
      header("Location:pass.php");
    }
    else 
    {
        
    }
  }
  else if ($bus==Bluebus)
  {
    $sql="insert into ticket(Bus,Duration,Time,Price)values('$bus','1 Hour 15 Minutes','20:30 pm','5000')";
    $query=mysqli_query($con,$sql);

    if ($query)
    {
      header("Location:pass.php");
    }
    else 
    {
  
    }
  }
}
?>
<html>
    <title>Document</title>
</head>
<body>
<a href="logout.php">
        <button>LOGOUT</button>
</a> 
    <h1>Booked</h1>
    
</body>
</html>