<!DOCTYPE html>

<?php
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
				<li><a href="contact_us.php">Contact Us</a></li>
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
		
		<div id="shopping_cart">
			<span style="float:right; font-size:18px; line-height:40px; padding:5px;">
			<?php 
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
					?>
			<b style="color:yellow">Shopping Cart</b>
			Total Books- Total Price-
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
				<?php
				$get_book = "select * from books ";
	 
				$run_book = mysqli_query($con, $get_book);
	 
				while($row_book = mysqli_fetch_array($run_book))
				{
					$book_id = $row_book['book_id'];
					$book_cat = $row_book['book_cat'];
					$book_title = $row_book['book_title'];
					$book_price = $row_book['book_price'];
					$book_image = $row_book['book_image'];
		 
		 
					echo "
							<div id='single_book' >
								<h3>$book_title</h3>
								<img src='admin_area/book_images/$book_image' width='180' height='180'/>
								<p><b>Price: Rs.$book_price</b></p>
					
								<a href='details.php?book_id=$book_id' style='float:left;'>Details</a>
								<a href='index.php?book_id=$book_id'><button style='float:right; '>add to cart</button></a>
					
				
								</div>
		 
						";
				}	
				?>
			
			</div>
		
		
		
		</div>
		
		</div>
		
		<div id="footer">
		
		<h2 style="text-align:center; padding-top:30px; ">&copy; 2016 for WTA project </h2>
		
		</div>
	
	
	
	
	
	
	
	</div >


</body>
</html>