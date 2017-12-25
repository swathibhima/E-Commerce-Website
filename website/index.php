<!Doctype html>

<?php
session_start();
include("functions/functions.php");


?>
<html>

<head>
	<title> My online Shop</title>
	<link rel= "stylesheet" href ="styles/style.css"  media ="all" type ="text/css"> 
</head>

<body>
	<!-- Main container start from here---->
	<div class ="main_wrapper">
		<!-- header starts  here---->
		<div class ="header_wrapper"> 
		
			<a href ="index.php"><img id ="logo" src ="images/images.png" width="250" height ="150"/></a>
			<img  id ="banner" src ="images/images.jpg" width ="749"  height ="150"  />
		
		</div>
		<!-- header end  here---->
		
		
		<!-- Navagation bar starts  here---->
		<div class ="menubar">
			<ul id ="menu">
				<li><a href ="index.php">Home</a></li>
				<li><a href ="all_products.php">All products</a></li>
				<li><a href ="customer/my_account.php">My Account</a></li>
				<li><a href ="#">Sign Up</a></li>
				<li><a href ="catr.php">Shopping Cart</a></li>
				<li><a href ="#">Contact Us</a></li>
			
			
			</ul>
			<div id ="form">
				<form method ="GET" action ="results.php" enctype ="multipart/form-data">
				
					<input type ="text" name ="user_query" placeholder ="search a products"/>
					<input type ="submit" name ="search" value ="search">
				
				</form>
			</div>
			
		</div>
		
		<!-- Navagation bar end  here---->
		
		<!--content wraper starts  here---->
		
		<div class ="content_wrapper">	
		
			<div id="sidebar"> 
			
				<div id ="sidebar_title">Categories</div>
				<ul id ="cats" >
				
					<?php getCats(); ?>	
				
				
				</ul>
				
				
				
				<div id ="sidebar_title">Brands</div>
				<ul id ="cats" >
					<?php
					
					getBrands();
					
					
					?>
				
				</ul>
			</div>
			<div id ="content_area"> 
			
				<?php cart();?>
			
				<div id ="shopping_cart">
					<span style ="float:right; font-size:17px; padding:5px; line-height:40px ">
					<?php
					
					
					
					if(isset($_SESSION['customer_email'])){
						
						
						echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style = 'color:yellow'> Your</b>" ;
					
					}else{			
						
						echo "<b>Welcome Guest:</b>";
					
					}
					
					?>
					 <b  style ="color: yellow">Shopping Cart-</b> Total Items:<?php total_items();?> Total Price:<?php total_price();?> <a href ="cart.php" style ="color:yellow">Go to Cart</a>
					
					<?php
					
					
					if(!isset($_SESSION['customer_email'])){
						
						
						echo "<a href ='checkout.php' style ='color:orange'>Login</a>";	
						
					}
					else{
						echo "<a href ='logout.php' style ='color:orange'>Logout</a>";
						
					}
					
					
					
					
					?>
					
					</span>
					
				</div>
				
				<div id ="products_box">
			
					<?php getpro(); ?>
					<?php getCatpro();?>
					<?php getBrandpro();?>
					
				</div>
				
			</div>
		</div>
		
		<!--content wraper end  here---->
		
		<div id="footer"> 
		
			<h2 style ="text-align:center; padding-top:30px;">&copy; 2017 by www.onlineTuting.com</h2>
		
		
		</div>
	
	</div>
	
	<!-- Main container end from here---->
</body>
</html>