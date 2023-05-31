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
<?php
if (isset($_POST['submit']))
{
    header("Location:booked.php");
}
?> 

<html>
    <head><style>
        table{
            border-color:white;
        }
    </style></head>
    <body bgcolor="orange">
    <a href="logout.php">
        <button>LOGOUT</button>
</a> 
<center>
        <h1>Payment</h1>
        <form method="POST">
        <table border="2">
            <thead>
                <th>BUS Detail</th>
                <th>BUS From</th>
                <th>BUS To</th>
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
</table>
<br>
<input type="submit" value="Pay" name="submit"></input>
</form>
    </center>
</body>
</html>