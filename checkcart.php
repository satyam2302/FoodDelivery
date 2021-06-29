
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
    
    <hr>
    
    
 <head>
     <title>Cafe Bistro</title>
     <link rel="stylesheet" type="text/css" href="style5.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
         <center> 
     <form action="bill.php" method="POST">
     <div>
     <img class="scale" src="foodicon/cutlery(1).png"><b style="font-size:25px" id="ff"></b></div>
     <br>
     <div>
     <img class="scale" src="foodicon/price-tag.png"><b style="font-size:25px" id="gg"></b></div>
   
       
        <input type="hidden" name="checkfood" id="checkfoodcartprice">
        <input type="hidden" name="checkfood1" id="checkfoodcart">
        
         
        <br>
        <br>
        <h4><input type="submit" value="Confirm Order">
        <input type="reset" id="back" value="Back">
        </h4>
       
    </form>
    </center>

</html>

<script>
    var vone=localStorage.getItem("onelocal");
    var vtwo=localStorage.getItem("twolocal");
    var variableOne=vtwo;
    var variableTwo=vone;
    document.getElementById("checkfoodcartprice").value=variableTwo;
    document.getElementById("checkfoodcart").value=variableOne;
    var ff=document.getElementById("ff");
    var gg=document.getElementById("gg");
    ff.innerHTML=variableOne;
    gg.innerHTML=variableTwo;
    var back=document.getElementById("back");
    back.onclick=function(){
        window.location.assign("main1.php");
    }


</script>

<?php
}
else {
    echo"<center>";
    echo'<link rel="stylesheet" type="text/css" href="style4.css">';

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
