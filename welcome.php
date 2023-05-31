<?php 
session_start();

if (!isset($_SESSION['loggin']) || $_SESSION['username']!=true )
{
    header("Location:login.php");
}//location page should be set here
?>


<html>
    <head>
    <title>Document</title>
</head>
<body bgcolor="orange">
    
<a href="logout.php">
        <button>LOGOUT</button>
</a>  <center>
    <h1>Welcome <?php echo $_SESSION['username']; ?></h1><hr><br><br>  
    <form action="bus.php" method="POST">
<label>From:</label>    <select name="from" required>
            <option ="">--Select Your Starting Point--</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Kolkatta">Kolkatta</option>
</select>

<label>To:</label>       <select name="to" required>
            <option ="">--Select Your Dropping Point--</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Kolkatta">Kolkatta</option>
            </select>
<label>Date</label>
<input type="date" name="date" required></input><br><br>
<input type="submit" name="submit"></input>


</form>
</center>

</body>
</html>