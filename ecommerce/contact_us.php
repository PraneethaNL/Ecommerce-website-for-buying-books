<!DOCTYPE html>

<?php
session_start();
include("functions/functions.php");

?>
<html>
<head>
	<title>Book Palace</title>
	
	
	<link rel="stylesheet" href="styles/style.css"  media="all"/>
</head>

<body>

	<div class="main_wrapper">
	
		<div class="header_wrapper">
		<img id="logo" src="images/logo.png" />
		<img id="banner" src="images/books.jpg" />
		
		
		</div>
		<div class="menubar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_books.php">All Books</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="customer_register.php">Sign Up</a></li>
				<li><a href="cart.php">Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			
			<div id="form"> 
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" size="45" placeholder="search a Book"/>
					<input type="submit" name="search" value="search"/>
				
				</form>
			
			</div>
		
		</div>
		
		<div class="content_wrapper">
		
		<div id="sidebar">
		
			<div id="sidebar_title" style="text-align:center">Departments</div>
			
			<ul id="cats">
				<?php
					getcats();
				?>
			
			</ul>
		
		</div>
		
		<div id="content_area">
		<?php cart() ?>
		<div id="shopping_cart">
			<span style="float:right; font-size:18px; line-height:40px; padding:5px;">
			<?php 
					if(isset($_SESSION['customer_email'])){
					echo $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
					?>
			 <b style="color:yellow">Shopping Cart</b>
			Total Books-<?php total_books();?> Total Price-<?php total_price();?> 
			<a href="cart.php" style="color:yellow;">Go to Cart</a>
			
			<?php 
					if(!isset($_SESSION['customer_email'])){
					
					echo "<a href='checkout.php' style='color:orange;'>Login</a>";
					
					}
					else {
					echo "<a href='logout.php' style='color:orange;'>Logout</a>";
					}
					
					
					
					?>
			</span>
		
		
		
		</div>
			<div id="book_box">
				<h2>Contact Us</h2>
				<p>For any queries or issues,</p>
				<p>24x7 helpline number(toll free):7411159912</p>
				<p>Or you can e-mail us at kakarlasaiteja@gmail.com</p>
				<p>Response will be given within 24 hours</p>
				<p>Happy shopping :)</p>
				
			
			</div>
		
		
		
		</div>
		
		</div>
		
		<div id="footer">
		
		<h2 style="text-align:center; padding-top:30px; ">&copy; 2016 for WTA project </h2>
		
		</div>
	
	
	
	
	
	
	
	</div >


</body>
</html>