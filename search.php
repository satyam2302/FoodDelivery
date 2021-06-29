<?php

$search=$_POST['search'];
$str="drink";
if(preg_match("/^b.er$/",$search,$matches))
{
    ?>
    <img class="scale" src="foodicon/beer.png"><b>beer</b>
    <button id="clickmeadd">add</button>
    <button id="clickmerem">remove</button>
    <?php
}
elseif(preg_match("/^ca.e$/",$search,$matches))
{
    ?>
    <img class="scale" src="foodicon/cake.png"><b>Cake</b>
    <button id="clickmeadd1">add</button>
    <button id="clickmerem1">remove</button>
    <button id="price1"></button>
    <?php
}
elseif(preg_match("/^d..nk$/",$search,$matches))
{
    ?>
    <img class="scale" src="foodicon/drink.png"><b>Drink</b>
    <button id="clickmeadd2">add</button>
    <button id="clickmerem2">remove</button>
    <button id="price2"></button>
    <?php
}
elseif(preg_match("/^ham...ger$/",$search,$matches))
{
    ?>
   <img class="scale" src="foodicon/hamburger.png"><b>Hamburger</b>
    <button id="clickmeadd3">add</button>
    <button id="clickmerem3">remove</button>
    <button id="price3"></button>
    <?php
}
elseif(preg_match("/^pi.za$/",$search,$matches))
{
    ?>
    <img class="scale" src="foodicon/pizza.png"><b>Pizza</b>
    <button id="clickmeadd4">add</button>
    <button id="clickmerem4">remove</button>
    <button id="price4"></button>
    <?php
}
elseif(preg_match("/^fr.....ries$/",$search,$matches))
{
    ?>
    <img class="scale" src="foodicon/french-fries.png"><b>French Fries</b>
    <button id="clickmeadd5">add</button>
    <button id="clickmerem5">remove</button>
    <button id="price5"></button>
    <?php
}
elseif(preg_match("/^ve.soup$/",$search,$matches))
{
    ?>
     <img class="scale" src="foodicon/soup.png"><b>Veg Soup</b>
    <button id="clickmeadd6">add</button>
    <button id="clickmerem6">remove</button>
    <button id="price6"></button>
    <?php
}
elseif(preg_match("/^dou..nut$/",$search,$matches))
{
    ?>
    <img class="scale" src="foodicon/doughnut.png"><b>Doughnut</b>
    <button id="clickmeadd7">add</button>
    <button id="clickmerem7">remove</button>
    <button id="price7"></button>
    <?php
}
elseif(preg_match("/^po.corn$/",$search,$matches))
{
    ?>
   <img class="scale" src="foodicon/popcorn.png"><b>Popcorn</b>
    <button id="clickmeadd8">add</button>
    <button id="clickmerem8">remove</button>
    <button id="price8"></button>
    <?php
}
elseif(preg_match("/^cof.ee$/",$search,$matches))
{
    ?>
  <img class="scale" src="foodicon/coffee.png"><b>Coffee</b>
    <button id="clickmeadd9">add</button>
    <button id="clickmerem9">remove</button>
    <button id="price9"></button>
    <?php
}
elseif(preg_match("/^pa.ta$/",$search,$matches))
{
    ?>
   <img class="scale" src="foodicon/fusilli.png"><b>Pasta</b>
    <button id="clickmeadd10">add</button>
    <button id="clickmerem10">remove</button>
    <button id="price10"></button>
    <?php
}
elseif(preg_match("/^burge.combo$/",$search,$matches))
{
    ?>
    <img class="scale" src="foodicon/fast-food.png"><b>Burger Combo</b>
    <button id="clickmeadd11">add</button>
    <button id="clickmerem11">remove</button>
    <button id="price11"></button>
    <?php
}
elseif(preg_match("/^w.ter$/",$search,$matches))
{
    ?>
   <img class="scale" src="foodicon/water.png"><b>Water</b>
    <button id="clickmeadd12">add</button>
    <button id="clickmerem12">remove</button>
    <button id="price12"></button>
    <?php
}
elseif(preg_match("/^ice.ream$/",$search,$matches))
{
    ?>
    <img class="scale" src="foodicon/sundae.png"><b>Ice Cream</b>
    <button id="clickmeadd13">add</button>
    <button id="clickmerem13">remove</button>
    <button id="price13"></button>     
    <?php
}
else{
    echo"not found";
}



?>