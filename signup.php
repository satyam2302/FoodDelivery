

















<!DOCTYPE html>
<html>
<head>
    <title>Cafe Bistro</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


</head>

<body>
    <header>
        
        <nav>
            <div class="row clearfix">
                <img src="bistro.png" class="logo">
                <ul class="main-nav">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="#">How To Order</a></li>
                    <li><a href="#">CheckMore</a></li>
                   
                    
                    <li><a href="login.html">Login Here</a></li>
                </ul>
            </div>
        </nav>







<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];

$host="host=127.0.0.1";
$port="port=5432";
$dbname="dbname=testdb";
$c="user=postgres password=postgres";
$db=pg_connect("$host $port $dbname $c");






$qq="insert into login values('$username','$password')";
$result=pg_query($db,$qq);
if($result){

$_SESSION['loggedin'] = true;
$_SESSION['username'] = $username;
$_SESSION['password']=$password;


header("Location:main1.php");}
else{




echo"<h1>Username Already Exists!</h1>";
}






pg_free_result($result);
pg_close($db);
?>
