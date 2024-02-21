<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="my.css">
</head>
<body bgcolor="#F5F5F5">

<?php

   include 'header.php';

?>

<div class="qww1">

<?php

   include 'slider.php';        

?>

</div>


<div class="qww2">

<?php

include 'db.php';

$getquery=mysqli_query($mehra,"select * from tables limit 6");

if(isset($_POST['search'])){
  $svalue1=$_POST['svalue'];

  if($svalue1==""){
  	 $getquery=mysqli_query($mehra,"select * from tables");
 
  }
  else{
  $getquery=mysqli_query($mehra,"select * from tables where productname LIKE '%$svalue1%' OR about LIKE '%$svalue1%'  by limit 6");
   }

}

echo'<table>';

while($resultuser=$getquery->fetch_assoc()){

 //word
// $about1=explode(" ", $resultuser['about']);

	echo'

<div class="q1">

	<div class="a4"><img src="images/'.$resultuser['image'].'"class="p1"></div>

	<div class="a1">'.$resultuser['productname'].'</div>

	<div class="a2">';

//word 
// for($i=0;$i<=2;$i++){
// 	echo $about1[$i];
// 	echo" ";
// }


//char
echo substr($resultuser['about'], 0,11);


echo '

</div>

	<div class="a3">'.$resultuser['price'].'</div>
	
<a href="moredetails.php?id='.$resultuser['id'].'&image='.$resultuser['image'].'&productname='.$resultuser['productname'].'&about='.$resultuser['about'].'&price='.$resultuser['price'].'"><button class="r1">read more</button></a>
<br>

<form action="logic.php" method="post">

<input type="hidden" name="pid" value="'.$resultuser['id'].'">
<input type="hidden" name="product1" value="'.$resultuser['productname'].'">
<input type="hidden" name="photo22" value="'.$resultuser['image'].'">
<input type="hidden" name="price3" value="'.$resultuser['price'].'">

<a href="login.php"<button class="r1">add to cart</button></a>
</form>

</div>

';

}

echo'</table>';
?>
</div>




 <?php

include 'db.php';

 $getquery=mysqli_query($mehra,"select * from tables order by id desc limit 4");

echo '<div class="qttq">';

while($resultuser=$getquery->fetch_assoc())

{

echo'

	<div class="atq">

			<img src="images/'.$resultuser['image'].'" class="pyt1">

	      <div class="art1">'.$resultuser['productname'].'</div>

	</div>
   
';

}

echo '</div>';

?>


 <?php

include 'db.php';

 $getquery=mysqli_query($mehra,"select * from tables order by id desc limit 4");

echo '<div class="qttq">';

while($resultuser=$getquery->fetch_assoc())

{

echo'

	<div class="atq">

			<img src="images/'.$resultuser['image'].'" class="pyt1">

	      <div class="art1">'.$resultuser['productname'].'</div>
	</div>
   
';

}

echo '</div>';

?>



 <?php

include 'db.php';

 $getquery=mysqli_query($mehra,"select * from tables order by id desc limit 4");

echo '<div class="qttq">';

while($resultuser=$getquery->fetch_assoc())

{

echo'

	<div class="atq">

			<img src="images/'.$resultuser['image'].'" class="pyt1">

	      <div class="art1">'.$resultuser['productname'].'</div>
	</div>
   
';

}

echo '</div>';

?>


<div class="zaz" onmouseenter="showArrow()" onmouseleave="hideArrow()">
<span class="hoh" onclick="left()" id="wr1"><</span>
<span class="kok" onclick="right()" id="wr2">></span>

<div class="frr">
	 
 <?php

include 'db.php';

 $getquery=mysqli_query($mehra,"select * from tables order by id desc limit 21");

echo '<div class="osd" id="kk1">

';
while($resultuser=$getquery->fetch_assoc())
{
echo'

	<div class="autq">

			<img src="images/'.$resultuser['image'].'" class="pyt1">

	      <div class="art1">'.$resultuser['productname'].'</div>
	</div>
   
';

}

echo '</div>
';
?>


</div>

<div class="frr1" id="rww1">

	<div class="frrr2">
	</div>

</div>
</div>
</div>


 <?php

include 'db.php';

 $getquery=mysqli_query($mehra,"select * from tables order by id desc limit 4");

echo '<div class="qttq">';

while($resultuser=$getquery->fetch_assoc())

{

echo'

	<div class="atq">

			<img src="images/'.$resultuser['image'].'" class="pyt1">

	      <div class="art1">'.$resultuser['productname'].'</div>
	</div>
   
';

}

echo '</div>';

?>

 
 <?php

include 'db.php';

 $getquery=mysqli_query($mehra,"select * from tables order by id desc limit 4");

echo '<div class="qttq">';

while($resultuser=$getquery->fetch_assoc())

{

echo'

	<div class="atq">

			<img src="images/'.$resultuser['image'].'" class="pyt1">

	      <div class="art1">'.$resultuser['productname'].'</div>
	</div>
   
';

}

echo '</div>';

?>

<div class="lkm">

 <?php

echo'

	<div class="avr">

		hhhhhh


	</div>
   
';

?>

</div>


<div class="qww2">

<?php

include 'db.php';

$getquery=mysqli_query($mehra,"select * from tables limit 6");

if(isset($_POST['search'])){
  $svalue1=$_POST['svalue'];

  if($svalue1==""){
  	 $getquery=mysqli_query($mehra,"select * from tables");
 
  }
  else{
  $getquery=mysqli_query($mehra,"select * from tables where productname LIKE '%$svalue1%' OR about LIKE '%$svalue1%'  by limit 6");
   }

}

echo'<table>';

while($resultuser=$getquery->fetch_assoc()){

 //word
// $about1=explode(" ", $resultuser['about']);

	echo'

<div class="q1">

	<div class="a4"><img src="images/'.$resultuser['image'].'"class="p1"></div>

	<div class="a1">'.$resultuser['productname'].'</div>

	<div class="a2">';

//word 
// for($i=0;$i<=2;$i++){
// 	echo $about1[$i];
// 	echo" ";
// }


//char
echo substr($resultuser['about'], 0,11);


echo '

</div>

	<div class="a3">'.$resultuser['price'].'</div>
	
<a href="moredetails.php?id='.$resultuser['id'].'&image='.$resultuser['image'].'&productname='.$resultuser['productname'].'&about='.$resultuser['about'].'&price='.$resultuser['price'].'"><button class="r1">read more</button></a>
<br>

<form action="logic.php" method="post">

<input type="hidden" name="pid" value="'.$resultuser['id'].'">
<input type="hidden" name="product1" value="'.$resultuser['productname'].'">
<input type="hidden" name="photo22" value="'.$resultuser['image'].'">
<input type="hidden" name="price3" value="'.$resultuser['price'].'">

<button type="submit" name="cart" class="r1">add to cart</button></a>
</form>

</div>

';

}

echo'</table>';
?>
</div>









<div class="rsst">

<?php

   include 'footer.php';

?>

</div>

</body>
</html>


<script>

kkk=1

function showArrow()
{
	let gg1=document.getElementById('wr1')
	let gg2=document.getElementById('wr2')

	gg1.style.display="block"
	gg2.style.display="block"
	
}

function hideArrow()
{
	let gg1=document.getElementById('wr1')
	let gg2=document.getElementById('wr2')

	gg1.style.display="none"
	gg2.style.display="none"
	
}

var cc1=document.getElementsById('p1')

function qq()

{
	if (cc1.style.display=="none")

	{
		cc1.style.display="block";
	}

	else{
		cc1.style.display="none"
	}
}

function right() {

	let gp3=document.getElementById('kk1')
	dw=gp3.offsetWidth/3
	w=dw*kkk
	scr=550*kkk
	if(kkk<2){
	kkk++
	}
    t="translateX(-"+w+"px)"
    gp3.style.transform=t

	let gl2=document.getElementById('rww1')
   
   scr1="translateX("+scr+"px)"
gl2.style.transform=scr1

}

function left() {

let gp3=document.getElementById('kk1')
dw=gp3.offsetWidth/3

if(kkk>0)
{
kkk--
}
scr=550*kkk
w=dw*kkk

t="translateX(-"+w+"px)"
gp3.style.transform=t

let gl2=document.getElementById('rww1')

scr1="translateX("+scr+"px)"
gl2.style.transform=scr1

}

</script>