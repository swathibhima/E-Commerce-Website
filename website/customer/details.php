<!Doctype html>

<?php

include("functions/functions.php");

?>
<html>

<head>
	<title> My online Shop</title>
	<link rel= "stylesheet" href ="styles/style2.css"  media ="all" type ="text/css"> 
</head>

<body>
	<!-- Main container start from here---->
	<div class ="main_wrapper">
	<!-- header starts  here---->
		<div class ="header_wrapper"> 
		
			<img id ="logo" src ="images/images1.png" width="250" height ="150"/>
			<img  id ="banner" src ="images/images.jpg" width ="749"  height ="150"  />
		
		</div>
		
		
		<!-- header end  here---->
		
		
		<!-- Navagation bar starts  here---->
		<div class ="menubar">
			<ul id ="menu">
				<li><a href ="#">Home</a></li>
				<li><a href ="#">All products</a></li>
				<li><a href ="#">My Account</a></li>
				<li><a href ="#">Sign Up</a></li>
				<li><a href ="#">Shopping Cart</a></li>
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
		
		<!--content wraooer starts  here---->
		
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
		
			<div id ="shopping_cart">
				<span style ="float:right; font-size:18px; padding:5px; line-height:40px "> Welcome Guest! <b  style ="color: yellow">Shopping Cart-</b> Total Items: Total Price <a href ="cart.php" style ="color:yellow">Go to Cart</a></span>
				
			</div>
		<div id ="products_box">
			
		<?php
		
		if(isset($_GET['pro_id'])){
			
			$product_id =$_GET['pro_id'];
			
		
		 $get_pro ="select * from products where product_id ='$product_id'"; 
	
	$run_pro = mysqli_query($con, $get_pro);
	
	
	
	if (!$run_pro) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
	
	
	while($row_pro = mysqli_fetch_array($run_pro)){
		
	$pro_id =$row_pro['product_id'];	
	$pro_title =$row_pro['product_title'];
	$pro_price =$row_pro['product_price'];
	$pro_image =$row_pro['product_image'];
	$pro_desc =$row_pro['product_desc'];
		
	echo "<div id ='single_product'>
		<h3> $pro_title </h3>
		<image src ='product_images/$pro_image' width ='400'  height ='300'/>
	
		<p> <b> $$pro_price</b></p>
		
		<p>$pro_desc</p>
		<a href ='index.php' style ='float:left;'>Go Back</a>
		
		
		<a href ='index.php?pro_id=$pro_id'><button style ='float:right'>Add to Cart</button></a>
		
	
	</div>";	
		
	}
	
		}
		
		?>
		
		
		</div>
		</div>
		</div>
		
		<!--content wraooer end  here---->
		
		<div id="footer"> 
		
		<h2 style ="text-align:center; padding-top:30px;">&copy; 2017 by www.bhimaonline.com</h2>
		
		
		</div>
	
	</div>
	
	<!-- Main container end from here---->
</body>
</html>