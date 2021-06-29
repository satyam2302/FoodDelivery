



<html>
<header>
        
        <nav>
            <div class="row clearfix">
                <img src="bistro.png" class="logo">
                <ul class="main-nav">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="#">How To Order</a></li>
                    
                    <li><img src="foodicon/carts.png" class="scale"></li>
                    
                
                    <li><a href="signup.html">Signup Here</a></li>
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
$username=$_POST['username'];
$password=$_POST['password'];
$price=$_POST['checkfood'];
$name=$_POST['checkfood1'];
$host="host=127.0.0.1";
$port="port=5432";
$dbname="dbname=testdb";
$c="user=postgres password=postgres";
$db=pg_connect("$host $port $dbname $c");

$result=pg_query($db,"select username,password from login where username='$username' and password='$password'"); 
echo"<html><body><table border=2>";

echo"<br>";
echo"<br>";
echo"<tr><th>Name</th><th>Food</th><th>Price</th></tr>";
while ($row=pg_fetch_row($result)) {
    if ($row[0]==$username && $row[1]==$password) {
        $qq="select  * from bill where username='$username'";
        $qq1="select pno,address from detail1 where username='$username'";
        $result1=pg_query($db,$qq);
        $result2=pg_query($db,$qq1);
        
        while($row1=pg_fetch_row($result1))
         {
           echo"<tr><td>";
           echo $row1[0];
           echo"</td><td>";
           echo $row1[1];
           echo"</td><td>";
           echo $row1[2];
           echo"</td></tr>";
        }
        
        echo"</table>";
        echo"<table border=2>";
        echo"<tr><th>Pno</th><th>Address</th></tr>";
        while($row2=pg_fetch_row($result2))
        {
          echo"<tr><td>";
          echo $row2[0];
          echo"</td><td>";
          echo $row2[1];
          echo"</td><td>";
          echo $row2[2];
          echo"</td></tr>";
}       echo"</table>";

    } else {
        echo"create new user";

    }
}







pg_free_result($result);
pg_close($db);
?>
        
        
























