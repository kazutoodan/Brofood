
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home Page</title>
   <link rel="stylesheet" href="css/style2.css">
</head>
<body>  
<header>
		
<a href="#" class="logo" strcasecmp><img src="images/brofood.png" alt=""></a>
<nav class="navbar">
       
		  <a href="#home">Home</a>
		  <a href="#about">About</a>
		  <a href="#stephead">Step</a>
          <a href="#top_pick">Top pick</a>
		  <a href="Login.php">Login</a>
		 
	   </nav>
</header>	   

  <!--home-->
  <div class="box">
	<section class="home" id="home">
		<div class="content">
			<h3>Brofood,</h3>
            <h3>bro brings food</h3>
			<p>come join the bromance!!!</a>
			<br>
			<a href="Login.php" class="btn">Log In</a>
		</div>
		
		<div class="image">
			<img src="images/food-1.png" alt="">
		</div>
	</section>

	<!---About me -->
<section class="about" id="about">

	<div class="box">
    <h1>ABOUT BROFOOD </h1>
     <div class="paragraph">

	   <p>Established by Big Brother in 2020, Brofood which starts as simply a way
        to make it easier for people in his neighbourhood stuck in their homes 
        during MCO to buy food has now developed into a nationwide food delivery 
        system, involving many restaurants and stalls that collaborates with us.

	    We believe in providing services where you can enjoy the luxury of eating
        out while being in comfort at your home. Our riders are equipped with
        top-quality insulated delivery bags to keep your warm food warm, and 
        cold drinks cold in order to give you the utmost satisfaction.</p> 

			
	
     
     </div>
    </div>

</section>

<!--steps-->

<div class="stepshead" id="stephead">
<h1>HOW DOES IT  WORK?</h1>
</div>

<section class="steps" id=steps>
<div class="box">
	<img src="images/step1.png" alt="">
	<h3> Login and Select your food</h3>
</div>

<div class="box">
	<img src="images/brofood-delivery.png" style="width=50%"alt="">
	<h3>we deliver for you</h3>
</div>

<div class="box">
	<img src="images/pay2.png" alt="">
	<h3>choose your payment methods</h3>
</div>

<div class="box">
	<img src="images/step4.png" alt="">
	<h3>finally, enjoy your food</h3>
</div>
</section>

<!--TOP PICK-->
<section class="top_picks" id="top_picks">
  <h1 class="heading">TOP PICK</h1>
<center> 
	<table >
	<tr>
    <td> <img src="images/desert2.jpg">
	<td><img  src="images/rice.jpg">	
	</tr>
	  <tr>
		<td><h1>Burger</h1>
		<td><h1>Pizza</h1>	
	  </tr>
       <tr>
		<td><img  src="images/burger.jpg"  />
		<td><img  src="images/strawberry2.jpg" />	
       </tr>
	   	 
	   <tr>
		<td><h1 class="item">Desert</h1>
		<td><h1 class="item">Berverage</h1>	
       </tr>
  </table>
</center>
</section>

	<?php include 'footer.php';?>
</div>	
</body>
</html>
