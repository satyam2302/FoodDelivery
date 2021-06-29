



<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo $_SESSION['loggedin']; ?>

<html>
<header>
        
        <nav>
            <div class="row clearfix">
                <img src="bistro.png" class="logo">
                <ul class="main-nav">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="#">How To Order</a></li>
                    
                    <li><img src="foodicon/carts.png" class="scale"></li>
                    
                
                    <li><a href="logout.php" id="logout">Logout</a></li>
                </ul>
            </div>
        </nav>    
    </header>
    
    
    
    
 <head>
     <title>Cafe Bistro</title>
     <link rel="stylesheet" type="text/css" href="style2.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>    
    

</html>
<?php

$pno=$_POST['pno'];
    $address=$_POST['address'];
    $user=$_SESSION['username'];

    $host="host=127.0.0.1";
    $port="port=5432";
    $dbname="dbname=testdb";
    $c="user=postgres password=postgres";
    $db=pg_connect("$host $port $dbname $c");



    $qq="insert into detail1 values('$user','$pno','$address')";
    $result=pg_query($db, $qq);
    if ($result) {
        header("Location:last.php");
    } else {
        echo"<h1>Error!</h1>";
    }







    pg_free_result($result);
    pg_close($db);
}else
{
    echo"<center>";
    echo'<link rel="stylesheet" type="text/css" href="style6.css">';
    
    echo '<script type="text/javascript">

    confirm("Please Login!!");
    if(confirm=true){
        window.location.assign("login.html");}
    else{
        
    }

     
    </script>';
    
    echo"</center>";
}
?>

        
        
























