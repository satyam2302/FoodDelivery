
<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo $_SESSION['loggedin'];
    ?>
<html>
    <div id="sec1">
    <body>
        
        <header>
        
            <nav>
                <div class="row clearfix">
                    <img src="bistro.png" class="logo">
                    <ul class="main-nav">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="#">How To Order</a></li>
                        <li><a href="history.php">History</a></li>
                        <li><a href="signup.html">SignUp</a></li>
                        <li><a href="" id="checkcart">Check-Cart</a></li>
                        <li><a href="logout.php" id="logout">Logout</a></li>
                       
                        
                        <li><img src="foodicon/carts.png" class="scale"></li>
                      
                      
                        
                       
                    </ul>
                </div>
            </nav>    
        </header>
        
       
     
        

    <head>
   
    <title>Cafe Bistro</title>
    <link rel="stylesheet" type="text/css" href="style4.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    
    </head>
    
<form action="#" method="POST" class="form">
    <i class="fa fa-search">  </i><input type="text" id="myinput" placeholder="search for food">  <button type="button" onclick="getInputValue();">Search Food</button>
    
</form>
<hr>
        <style>
            hr{
                background-color:black;
            }
        </style>
<br>
<br> <li>
    
    <div id="beerdiv">
    <img class="scale" src="foodicon/beer.png"><b>Beer</b>
    <button id="clickmeadd" value="beer">add</button>
    <button id="clickmerem">remove</button>
    <button id="price"></button>
    </div>
    <br>
    <br>
    <div id="cakediv">
    <img class="scale" src="foodicon/cake.png"><b>Cake</b>
    <button id="clickmeadd1">add</button>
    <button id="clickmerem1">remove</button>
    <button id="price1"></button>
    </div>
    <br>
    <br>
    <div id="drinkdiv">
    <img class="scale" src="foodicon/drink.png"><b>Drink</b>
    <button id="clickmeadd2">add</button>
    <button id="clickmerem2">remove</button>
    <button id="price2"></button>
    </div>
    <br>
    <br>
    <div id="hamburgerdiv">
    <img class="scale" src="foodicon/hamburger.png"><b>Hamburger</b>
    <button id="clickmeadd3">add</button>
    <button id="clickmerem3">remove</button>
    <button id="price3"></button>
    </div>
    <br>
    <br>
    <div id="pizzadiv">
    <img class="scale" src="foodicon/pizza.png"><b>Pizza</b>
    <button id="clickmeadd4">add</button>
    <button id="clickmerem4">remove</button>
    <button id="price4"></button>
    </div>
    <br>
    <br>
    <div id="friesdiv">
    <img class="scale" src="foodicon/french-fries.png"><b>French Fries</b>
    <button id="clickmeadd5">add</button>
    <button id="clickmerem5">remove</button>
    <button id="price5"></button>
    </div>
    <br>
    <br>
    <div id="soupdiv">
    <img class="scale" src="foodicon/soup.png"><b>Veg Soup</b>
    <button id="clickmeadd6">add</button>
    <button id="clickmerem6">remove</button>
    <button id="price6"></button>
    </div>
    <br>
    <br>
    <br>
   </div>
   </li>
<br>
    <li>
    <div id="sec2">
    <div id="doughnutdiv">
    <img class="scale" src="foodicon/doughnut.png"><b>Doughnut</b>
    <button id="clickmeadd7">add</button>
    <button id="clickmerem7">remove</button>
    <button id="price7"></button>
    </div>
    <br>
    <br>
    <div id="popcorndiv">
    <img class="scale" src="foodicon/popcorn.png"><b>Popcorn</b>
    <button id="clickmeadd8">add</button>
    <button id="clickmerem8">remove</button>
    <button id="price8"></button>
    </div>
    <br>
    <br>
    <div id="coffeediv">
    <img class="scale" src="foodicon/coffee.png"><b>Coffee</b>
    <button id="clickmeadd9">add</button>
    <button id="clickmerem9">remove</button>
    <button id="price9"></button>
    </div>
    <br>
    <br>
    <div id="pastadiv">
    <img class="scale" src="foodicon/fusilli.png"><b>Pasta</b>
    <button id="clickmeadd10">add</button>
    <button id="clickmerem10">remove</button>
    <button id="price10"></button>
    </div>
    <br>
    <br>
    <div id="burgerdiv">
    <img class="scale" src="foodicon/fast-food.png"><b>Burger Combo</b>
    <button id="clickmeadd11">add</button>
    <button id="clickmerem11">remove</button>
    <button id="price11"></button>
    </div>
    <br>
    <br>
    <div id="waterdiv">
    <img class="scale" src="foodicon/water.png"><b>Water</b>
    <button id="clickmeadd12">add</button>
    <button id="clickmerem12">remove</button>
    <button id="price12"></button>
    </div>
    <br>
    <br>
    <div id="icecreamdiv">
    <img class="scale" src="foodicon/sundae.png"><b>Ice Cream</b>
    <button id="clickmeadd13">add</button>
    <button id="clickmerem13">remove</button>
    <button id="price13"></button>   
    </div>       
    
  

    <br>
    <br>
   
    <br>
    <br>
   
    <br>
    <br>
    </div>
    </li>
</body>
                       <button id="foodnameid"></button>
                       <button id="foodnameid1"></button>
                       <button id="foodnameid2"></button>
                       <button id="foodnameid3"></button>
                       <button id="foodnameid4"></button>
                       <button id="foodnameid5"></button>
                       <button id="foodnameid6"></button>
                       <button id="foodnameid7"></button>
                       <button id="foodnameid8"></button>
                       <button id="foodnameid9"></button>
                       <button id="foodnameid10"></button>
                       <button id="foodnameid11"></button>
                       <button id="foodnameid12"></button>
                       <button id="foodnameid13"></button>
</html>
<script>

    <?php
  
     
    $username=$_POST['username'];
    $password=$_POST['password'];
    $host="host=127.0.0.1";
    $port="port=5432";
    $dbname="dbname=testdb";
    $c="user=postgres password=postgres";
    $db=pg_connect("$host $port $dbname $c"); ?>
    
    var button=document.getElementById("clickmeadd");
    var price=document.getElementById("price");
    count = 0;
    val=0;
    button.onclick = function() {
        if(count>=0)
        count += 1;
        button.innerHTML="added :"+count; 
        
        val +=150;
        price.innerHTML=val;
        
        
       
    };
    
    var button1=document.getElementById("clickmerem");
    count;
    val;
    button1.onclick=function(){
        if(count>=1)
        count -= 1;
    
        button.innerHTML="added"+count;
        if(val>=1)
        val-=150;

        price.innerHTML=val;
      

    }
    count;
    val;
    

    var button2=document.getElementById("clickmeadd1");
    var price1=document.getElementById("price1");
    val1=0;
    count1 = 0;
    button2.onclick = function() {
        if(count1>=0)
        count1 += 1;
        button2.innerHTML="added :"+count1;
        val1 +=85;
        price1.innerHTML=val1;

    };
    val1;
    
    var button3=document.getElementById("clickmerem1");
    count1;
    button3.onclick=function(){
        if(count1>=1)
        count1 -= 1;
    
        button2.innerHTML="added"+count1;
        if(val1>=1)
        val1 -=85;
        price1.innerHTML=val1;

    }
    count1;
    val1;


    var button4=document.getElementById("clickmeadd2");
    var price2=document.getElementById("price2");
    val2=0;
    count2 = 0;
    button4.onclick = function() {
        if(count2>=0)
        count2 += 1;
        button4.innerHTML="added :"+count2;
        val2+=65;
        price2.innerHTML=val2;
    };
    val2;
    
    var button5=document.getElementById("clickmerem2");
    count2;
    button5.onclick=function(){
        if(count2>=1)
        count2 -= 1;
    
        button4.innerHTML="added"+count2;
        if(val2>=1)
        val2-=65;
        price2.innerHTML=val2;

    }
    count2;
    val2;


    var button6=document.getElementById("clickmeadd3");
    var price3=document.getElementById("price3");
    val3=0;
    count3 = 0;
    button6.onclick = function() {
        if(count3>=0)
        count3 += 1;
        button6.innerHTML="added :"+count3;
        val3+=89;
        price3.innerHTML=val3;
    };
    val3;
    
    var button7=document.getElementById("clickmerem3");
    count3;
    button7.onclick=function(){
        if(count3>=1)
        count3 -= 1;
    
        button6.innerHTML="added"+count3;
        if(val3>=1)
        val3-=89;
        price3.innerHTML=val3;

    }
    count3;
    val3;


    var button8=document.getElementById("clickmeadd4");
    var price4=document.getElementById("price4");
    count4 = 0;
    val4=0;
    button8.onclick = function() {
        if(count4>=0)
        count4 += 1;
        button8.innerHTML="added :"+count4;
        val4+=180;
        price4.innerHTML=val4;
    };
    val4;
    
    var button9=document.getElementById("clickmerem4");
    count4;
    button9.onclick=function(){
        if(count4>=1)
        count4 -= 1;
    
        button8.innerHTML="added"+count4;
        if(val4>=1)
        val4-=180;
        price4.innerHTML=val4;

    }
    val4;
    count4;


    var button10=document.getElementById("clickmeadd5");
    var price5=document.getElementById("price5");
    count5 = 0;
    val5=0;
    button10.onclick = function() {
        if(count5>=0)
        count5 += 1;
        button10.innerHTML="added :"+count5;
        val5+=59;
        price5.innerHTML=val5;
    };
    val5;
    var button11=document.getElementById("clickmerem5");
    count5;
    button11.onclick=function(){
        if(count5>=1)
        count5 -= 1;
    
        button10.innerHTML="added"+count5;
        if(val5>=1)
        val5-=59;
        price5.innerHTML=val5;

    }
    val5;
    count5;


    var button12=document.getElementById("clickmeadd6");
    var price6=document.getElementById("price6");
    count6 = 0;
    val6=0;
    button12.onclick = function() {
        if(count6>=0)
        count6 += 1;
        button12.innerHTML="added :"+count6;
        val6+=80;
        price6.innerHTML=val6;
    };
    val6;
    count6;
    var button13=document.getElementById("clickmerem6");
    count6;
    button13.onclick=function(){
        if(count6>=1)
        count6 -= 1;
    
        button12.innerHTML="added"+count6;
        if(val6>=1)
        val6-=80;
        price6.innerHTML=val6;

    }
    val6;
    count6;


    var button14=document.getElementById("clickmeadd7");
    var price7=document.getElementById("price7");
    val7=0;
    count7 = 0;
    button14.onclick = function() {
        if(count7>=0)
        count7 += 1;
        button14.innerHTML="added :"+count7;

        val7+=120;
        price7.innerHTML=val7;
    };
    
    var button15=document.getElementById("clickmerem7");
    count7;
    button15.onclick=function(){
        if(count7>=1)
        count7 -= 1;
    
        button14.innerHTML="added"+count7;

        if(val7>=1)
        val7-=120;
        price7.innerHTML=val7;

    }
    count7;

    var button16=document.getElementById("clickmeadd8");
    var price8=document.getElementById("price8");
    val8=0;
    count8 = 0;
    button16.onclick = function() {
        if(count8>=0)
        count8 += 1;
        button16.innerHTML="added :"+count8;

        val8+=60;
        price8.innerHTML=val8;
    };
    
    var button17=document.getElementById("clickmerem8");
    count8;
    button17.onclick=function(){
        if(count8>=1)
        count8 -= 1;
    
        button16.innerHTML="added"+count8;

        if(val8>=1)
        val8-=60;
        price8.innerHTML=val8;


    }
    count8;


    var button18=document.getElementById("clickmeadd9");
    var price9=document.getElementById("price9");
    count9 = 0;
    val9=0;
    button18.onclick = function() {
        if(count9>=0)
        count9 += 1;
        button18.innerHTML="added :"+count9;

        val9+=80;
        price9.innerHTML=val9;
    };
    
    var button19=document.getElementById("clickmerem9");
    count9;
    button19.onclick=function(){
        if(count9>=1)
        count9 -= 1;
    
        button18.innerHTML="added"+count9;
        if(val9>=1)
        val9-=80;
        price9.innerHTML=val9;


    }
    count9;


    var button20=document.getElementById("clickmeadd10");
    var price10=document.getElementById("price10");
    val10=0;
    count10 = 0;
    button20.onclick = function() {
        if(count10>=0)
        count10 += 1;
        button20.innerHTML="added :"+count10;

        val10+=140;
        price10.innerHTML=val10;
    };
    
    var button21=document.getElementById("clickmerem10");
    count10;
    button21.onclick=function(){
        if(count10>=1)
        count10 -= 1;
    
        button20.innerHTML="added"+count10;
        if(val10>=1)
        val10-=140;
        price10.innerHTML=val10;




    }
    count10;


    var button22=document.getElementById("clickmeadd11");
    var price11=document.getElementById("price11");
    val11=0;
    count11 = 0;
    button22.onclick = function() {
        if(count11>=0)
        count11 += 1;
        button22.innerHTML="added :"+count11;

        val11+=99;
        price11.innerHTML=val11;
    };
    
    var button23=document.getElementById("clickmerem11");
    count11;
    button23.onclick=function(){
        if(count11>=1)
        count11 -= 1;
    
        button22.innerHTML="added"+count11;

        if(val11>=1)
        val11-=99;
        price11.innerHTML=val11;


    }
    count11;


    var button24=document.getElementById("clickmeadd12");
    var price12=document.getElementById("price12");
    val12=0;
    count12 = 0;
    button24.onclick = function() {
        if(count12>=0)
        count12 += 1;
        button24.innerHTML="added :"+count12;

        val12+=20;
        price12.innerHTML=val12;
    };
    
    var button25=document.getElementById("clickmerem12");
    count12;
    button25.onclick=function(){
        if(count12>=1)
        count12 -= 1;
    
        button24.innerHTML="added"+count12;


        if(val12>=1)
        val12-=20;
        price12.innerHTML=val12;


    }
    count12;


    var button26=document.getElementById("clickmeadd13");
    var price13=document.getElementById("price13");
    val13=0;
    count13 = 0;
    button26.onclick = function() {
        if(count13>=0)
        count13 += 1;
        button26.innerHTML="added :"+count13;
        

        val13+=65;
        price13.innerHTML=val13;



    };
    count13;
    var button27=document.getElementById("clickmerem13");
    count13;
    button27.onclick=function(){
        if(count13>=1)
        count13 -= 1;
    
        button26.innerHTML="added"+count13;

        if(val13>=1)
        val13-=65;
        price13.innerHTML=val13;


    }
    count13;

    function getInputValue(){
           
           var inputVal = document.getElementById("myinput").value;
           if(document.getElementById("myinput").value=="beer"){
            location.href = "#beerdiv";
            window.find("Beer");

           }
           else if(document.getElementById("myinput").value=="cake"){
            location.href = "#cakediv";
            window.find("Cake");
           }
           else if(document.getElementById("myinput").value=="drink"){
            location.href = "#drinkdiv";
            window.find("Drink");
           }
            else if(document.getElementById("myinput").value=="hamburger"){
            location.href = "#hamburgerdiv";
            window.find("Hamburger");
           }
            else if(document.getElementById("myinput").value=="pizza"){
            location.href = "#pizzadiv";
            window.find("Pizza");
           }
            else if(document.getElementById("myinput").value=="fries"){
            location.href = "#friesdiv";
            window.find("French Fries");
            }
            else if(document.getElementById("myinput").value=="soup"){
            location.href = "#soupdiv";
            window.find("Veg Soup");
            }
            else if(document.getElementById("myinput").value=="doughnut"){
            location.href = "#doughnutdiv";
            window.find("Doughnut");
            }
            else if(document.getElementById("myinput").value=="popcorn"){
            location.href = "#popcorndiv";
            window.find("Popcorn");
            }
            else if(document.getElementById("myinput").value=="coffee"){
            location.href = "#coffeediv";
            window.find("Coffee");
            }
            else if(document.getElementById("myinput").value=="pasta"){
            location.href = "#pastadiv";
            window.find("Pasta");
            }
            else if(document.getElementById("myinput").value=="burger"){
            location.href = "#burgerdiv";
            window.find("Burger Combo");
            }
            else if(document.getElementById("myinput").value=="water"){
            location.href = "#waterdiv";
            window.find("Water");
            }
            else if(document.getElementById("myinput").value=="icecream"){
            location.href = "#icecreamdiv";
            window.find("Ice Cream");
            }
          
        };

  
    var checkcart= document.getElementById("checkcart");
    var fname=document.getElementById("foodnameid");
    var fname1=document.getElementById("foodnameid1");
    var fname2=document.getElementById("foodnameid2");
    var fname3=document.getElementById("foodnameid3");
    var fname4=document.getElementById("foodnameid4");
    var fname5=document.getElementById("foodnameid5");
    var fname6=document.getElementById("foodnameid6");
    var fname7=document.getElementById("foodnameid7");
    var fname8=document.getElementById("foodnameid8");
    var fname9=document.getElementById("foodnameid9");
    var fname10=document.getElementById("foodnameid10");
    var fname11=document.getElementById("foodnameid11");
    var fname12=document.getElementById("foodnameid12");
    var fname13=document.getElementById("foodnameid13");


   
    
    




    checkcart.onclick=function(){
    

       if(val>0){
           var name=count+"beer";
           fname.innerHTML=name;

          
       }
       if(val1>0){
           var name1=count1+"Cake";
           fname1.innerHTML=name1;

       } 

       if(val2>0){
           var name2=count2+"Drink";
           fname2.innerHTML=name2;

       } 
       if(val3>0){
           var name3=count3+"Hamburger";
           fname3.innerHTML=name3;

       } 
       if(val4>0){
           var name4=count4+"Pizza";
           fname4.innerHTML=name4;

       } 
       if(val5>0){
           var name5=count5+"French Fries";
           fname5.innerHTML=name5;

       } 
       if(val6>0){
           var name6=count6+"Veg Soup";
           fname6.innerHTML=name6;

       } 
       if(val7>0){
           var name7=count7+"Doughnut";
           fname7.innerHTML=name7;

       } 
       if(val8>0){
           var name8=count8+"Popcorn";
           fname8.innerHTML=name8;

       } 
       if(val9>0){
           var name9=count9+"Coffee";
           fname9.innerHTML=name9;

       } 
       if(val10>0){
           var name10=count10+"Pasta";
           fname10.innerHTML=name10;

       } 
       if(val11>0){
           var name11=count11+"Burger Combo";
           fname11.innerHTML=name11;

       } 
       if(val12>0){
           var name12=count12+"Water";
           fname12.innerHTML=name12;

       } 
       if(val13>0){
           var name13=count13+"Ice Cream";
           fname13.innerHTML=name13;
       }

       else{

       }
        

        var finalfood = fname.innerHTML +"  "+ fname1.innerHTML +"  "+ fname2.innerHTML +"  "+ fname3.innerHTML  +"  "+ fname4.innerHTML  +"  "+ fname5.innerHTML  +"  "+  fname6.innerHTML  
        +"  "+  fname7.innerHTML +"  "+  fname8.innerHTML +"  "+  fname9.innerHTML +"  " + fname10.innerHTML +"  " + fname11.innerHTML+"  "+ fname12.innerHTML+"  " + fname13.innerHTML;

       
        alert("You Selected:"+"       "+finalfood);


       
      
 
       
     
       
        
       
        
        total=val+val1+val2+val3+val4+val5+val6+val7+val8+val9+val10+val11+val12+val13;
       
        alert("Total Price"+"       "+total);
       
       
        localStorage.setItem("onelocal",total);
        localStorage.setItem("twolocal",finalfood);
        window.open("checkcart.php")
        
        


       
        
        
        
    };
   
    
   



</script>
<?php
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