<?php
include('common.php');
?>
<html>
<head>
    <title>Document</title>
    <style>
        .banner{
            width:100%;
            height:100%;
            background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75));
            background-size:cover;
            background-position:center;
        }
        .navbar{
            width:120%;
            margin:auto;
            padding:20px 730px;
            display:flex;
            align-items:center; 
            justify-content:space-between;
           
        }
        .navbar ul li{
            list-style:none;
            display:inline-block;
            margin:0 20px;
            position:relative;
            
        }
        .navbar ul li a{
            text-decoration:none;
            color:white;
            text-transform:uppercase;
        }
        .navbar ul li::after{
            content: '';
            height:3px;
            width:0;
            background: orange;
            position:absolute;
            left:0;
            bottom:-10px;
            transition:0.5s;
        }
        .navbar ul li:hover::after{
            width:100%;
        }
        .content{
            font-size:20px;
            text-align:center;
            padding:70px;
        }
        button{
            
            width:200px;
            padding:15px 0px;
            margin:20px 20px;
            border-radius:25px;
            font-weight:bold;
            border:2px ;
            border-style:solid; 
            border-color:orange;
            background:transparent;
            color:white;
            cursor:pointer;
            position:relative;
            overflow:hidden;
        }
        span{
            background: orange;
            width:0;
            height:200%;
            border-radius:25px;
            position:absolute;
            left:0;
            bottom:0;
            z-index:-1;
            transition:0.5s;
        }
        button:hover span{
            width:200%;
        }
        button:hover{
            border:none;
        }
        </style>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <ul>
                <li><a href="b">About Us</a></li>
                <li><a href="b">Privacy</a></li>
                <li><a href="b">Terms & Condition</a></li>
                <li><a href="b">Blog</a></li>
    </ul>
    </div>
    <div class="content">
        <h1>Welcome to LJ Bus Booking</h1>
        
        <div>
 
        <button type="button" onclick="location.href='signup.php'"><span></span>SIGN UP</button>
       <button type="button" onclick="location.href='login.php'"><span></span>LOGIN</button>

    </div>

    </div>
    
</div>
</body>
</html> 
