<?php 
session_start();

if (!isset($_SESSION['loggin']) || $_SESSION['username']!=true )
{
    header("Location:login.php");
}//location page should be set here
?>

<?php

  $host='localhost';
  $user='root';
  $pass='';
  $db='db';

  $con=mysqli_connect($host,$user,$pass,$db);

  if(!$con)
  {
      echo "Connection Failed due to ".sqli_error();
  }

  $sql= "SELECT * FROM `passnumber` ORDER BY tmp DESC limit 1";
  $query=mysqli_query($con,$sql);
  
  while($row=mysqli_fetch_assoc($query))
  {
 $p=$row['pass'];
  }

  $sql= "SELECT * FROM `booking` ORDER BY id DESC limit 1";
  $query=mysqli_query($con,$sql);
  
  while($row=mysqli_fetch_assoc($query))
  {
 $x=$row['fromm'];
 $y=$row['too'];
 $z=$row['date'];
  }

  $sql= "SELECT * FROM `ticket` ORDER BY ID DESC limit 1";
  $query=mysqli_query($con,$sql);
  
  while($row=mysqli_fetch_assoc($query))
  {
 $a=$row['Bus'];
 $b=$row['Time'];
 $c=$row['Duration'];
$d=$row['Price']*$p ;
  }

?>


<html>
    <head>
      <style>
        table{
            border-color:white;
        }
        </style>
    </head>
    <body bgcolor="orange"> 
<center>
        <h1>Your Ticket is Booked</h1>
        <?php echo "Congratulations <u><b>".$_SESSION['username']."</b></u> Your Ticket Has be Booked";?><br><br>
        <form method="POST">
        <table border="1">
            <thead>
                <th>BUS Detail</th>
                <th>BUS From</th>
                <th>Bus To</th>
                <th>BUS Date</th>
                <th>BUS Time</th>
                <th>Duration</th>
                <th>BUS Price</th>
</thead>
<tbody>
    <tr>
        <td><?php echo $a;?></td>
        <td><?php echo $x;?></td>
        <td><?php echo $y;?></td>
        <td><?php echo $z;?></td>
        <td><?php echo $b;?></td>
        <td><?php echo $c;?></td>
        <td><?php echo $d;?></td>
</tr>
</tbody>
</table><br><br>
<table border="1">
<thead>
                <th>Passenger Name</th>
                <th>Passenger Age</th>
    
</thead>
<tbody>
<?php 
$sql= "SELECT * FROM `passdetail` ORDER BY per DESC limit $p";
  $query=mysqli_query($con,$sql);
  
  while($row=mysqli_fetch_assoc($query))
  {?>
    <tr>
    <td><?php echo $row['passname'];?></td>
    <td><?php echo $row['passage'];?></td>
</tr>
<?php
  }
  ?>
</tbody>
</table>
</form>
<a href="logout.php">
        <button>LOGOUT</button>
</a>
</center>
</body>
</html>