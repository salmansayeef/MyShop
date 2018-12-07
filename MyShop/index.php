<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content= "text/html; charset=utf-8">
		<title> My Shop</title>

		<link rel ="stylesheet" href= "styles/style.css" media= "all" />

	</head>

		<body>
		
			<!--header starts-->
			<div class= "main_wrapper">
			
			
				<div class= "header_wrapper">
					<img src="images/e-commerce.jpg" style= "float:left;">
					<img src="images/banner-e-commerce.png" style= "float:right;">
				</div>	
			<!--header ends-->
			
			<!--navigation starts-->
			
				<div id="navbar" >
				
					<ul id="menu">
					
						<li><a href="#">Home</a></li>
						<li><a href="#">All Products</a></li>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Sign Up</a></li>
						<li><a href="#">Shopping Cart</a></li>
						<li><a href="#">Contact Us</a></li>
					
					</ul>
					
					
					<div id="form">
					
						<form method="get" action="results.php" enctype= "multipart/form-data">
						<input type="text" name="user_query" placeholder= "Search a Product">
						<input type="submit" name="Search" value= "Search">
					
						</form>
					</div>
				
				</div>
			
				 <div class="content_wrapper">
				 
					<div id="left_sidebar">Left Sidebar</div>
					<div id="right_content">Right Content</div>
				</div>	
				
			<!--navigation ends-->
			
			<div class="footer">Footer Area</div>
			
			
			</div>



		</body>
</html>