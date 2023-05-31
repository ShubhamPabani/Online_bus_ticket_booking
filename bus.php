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

    $from=$_POST['from'];
    $to=$_POST['to'];
    $date=$_POST['date'];
    if ($from==$to)
    {
             header("Location:welcome.php"); 
    }
    else
    {
        $con=mysqli_connect($host,$user,$pass,$db);
    
        if(!$con)
        {
            echo "Connection Failed due to ".sqli_error();
        }
        $sql="insert into booking(fromm,too,date)values('$from','$to','$date');";
        $query=mysqli_query($con,$sql);
    
        if ($query)
        {
         
        }
        else
        {
            echo "Not inserted";
        }     
    }
    // data base formate should be done here
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
    <h1><b><u>BOOK BUS</u></b></h1>
    <form action="book.php" method="POST">
<fieldset><legend>RED BUS</legend>
    <?php echo $from; ?> → <?php echo $to; ?> <?php echo $date; ?> Duration: 1hr 40min Time: 15:30 pm <b>4000₹</b>
    <input type="radio" name="bus" value="Redbus">Red Bus</input>
</fieldset><br><br>

<fieldset><legend>YELLOW BUS</legend>
    <?php echo $from; ?> → <?php echo $to; ?> <?php echo $date; ?> Duration: 2hr 15min Time: 18:00 pm <b>3000₹</b>
    <input type="radio" name="bus" value="Yellowbus">Yellow Bus</input>
</fieldset><br><br>

<fieldset><legend>BLUE BUS</legend>
    <?php echo $from; ?> → <?php echo $to; ?> <?php echo $date; ?> Duration: 1hr 15min Time: 20:30 pm <b>5000₹</b>
    <input type="radio" name="bus" value="Bluebus">Blue Bus</input>
</fieldset><br><br>

<input type="submit" name="submit" value="Book"></input>
</form>
</center>
</body>
</html>