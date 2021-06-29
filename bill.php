


<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    ?>
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
     <link rel="stylesheet" type="text/css" href="style5.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <hr>    

</html>

<?php
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    $name=$_POST['checkfood1'];
    $price=$_POST['checkfood'];
    $_SESSION['finalfood']=$name;
    $_SESSION['total']=$price;
    $host="host=127.0.0.1";
    $port="port=5432";
    $dbname="dbname=testdb";
    $c="user=postgres password=postgres";
    $db=pg_connect("$host $port $dbname $c");

    $result=pg_query($db, "select username,password from login where username='$username' and password='$password'");
  
    while ($row=pg_fetch_row($result)) {
        if ($row[0]==$username && $row[1]==$password) {
            $qq="insert into bill values('$username','$name','$price')";
            $db1=pg_connect("$host $port $dbname $c");


            $result1=pg_query($db1, $qq);
            echo"<html>";
            echo"<body>";
            echo"<center>";
            echo"<br>";
            echo"<br>";

            echo"<br>";

            echo"<form action='final.php' method='POST'>";
            echo"<h4>";
           
            echo"Address:";
            echo"<input type='text' name='address' required>";
            echo"Phone No:";
            echo"<input type='number' name='pno' id='pn' onkeyup='myFunction1()'required>";
            echo'<span id="message" > </span> <br><br>';  
            echo"<br>";
            echo"<br>";

            echo"<input type='submit' id='sub1' value='Place Order'>";
            echo'</h4>';
            echo'</form>';
            echo"</center>";
            echo"</body>";
            echo"</html>";
        } else {
            echo"Opps! Something Went Wrong";
        }
        pg_free_result($result1);
        pg_close($db1);
    }

    ?>
    <script>
  var goodColor = "#66cc66";
var badColor = "#ff6666";
var message=document.getElementById("message");

function myFunction1() {
  var x = document.getElementById("pn").value.length;
  if(x==10)
  {
    message.style.color = goodColor;
    message.innerHTML="Valid Number";
    var sub=document.getElementById("sub1").style.visibility="visible"
  }
  else{
    message.style.color = badColor;
    message.innerHTML="Not A Valid Number";
    var sub=document.getElementById("sub1").style.visibility="hidden"
  }
}
    
  </script>    
    <?php



    pg_free_result($result);
    pg_close($db);
}
else {
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
        
        
























