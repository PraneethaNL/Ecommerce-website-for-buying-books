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
				<li><a href="../index.php">Home</a></li>
				<li><a href="../all_books.php">All Books</a></li>
				<li><a href="my_account.php">My Account</a></li>
				<li><a href="../customer_register.php">Sign Up</a></li>
				<li><a href="../cart.php">Cart</a></li>
				<li><a href="../contact_us.php">Contact Us</a></li>
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
		
			<div id="sidebar_title" style="text-align:center">My Account</div>
			
			<ul id="cats">
			<?php
				 $user = $_SESSION['customer_email'];
				
				$get_img = "select * from customer where customer_email='$user'";
				
				$run_img = mysqli_query($con, $get_img); 
				
				$row_img = mysqli_fetch_array($run_img); 
				
				$c_image = $row_img['customer_image'];
				
				$c_name = $row_img['customer_name'];
				
				echo "<p style='text-align:center;'><img src='customer_images/$c_image' width='150' height='150'/></p>";
				
				?>
				<li><a href="my_account.php?my_orders">My Orders</a></li>
				<li><a href="my_account.php?edit_account">Edit Account</a></li>
				<li><a href="my_account.php?change_pass">Change Password</a></li>
				<li><a href="my_account.php?delete_account">Delete Account</a></li>
				<li><a href="logout.php">Logout</a></li>
			
			</ul>
		
		</div>
		
		<div id="content_area">
		<?php cart() ?>
		<div id="shopping_cart">
			<span style="float:right; font-size:18px; line-height:40px; padding:5px;">
			<?php 
					if(isset($_SESSION['customer_email'])){
					echo $_SESSION['customer_email'] ;
					}
					
					?>
			
			
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
				if(!isset($_GET['my_orders'])){
					if(!isset($_GET['edit_account'])){
						if(!isset($_GET['change_pass'])){
							if(!isset($_GET['delete_account'])){
							
				echo "
				<h2 style='padding:20px;'>Welcome:  $c_name </h2>
				<b>You can see your orders progress by clicking this <a href='my_account.php?my_orders'>link</a></b>";
				}
				}
				}
				}
				?>
				
				<?php 
				if(isset($_GET['my_orders'])){
				include("my_orders.php");
				}
				if(isset($_GET['edit_account'])){
				include("edit_account.php");
				}
				if(isset($_GET['change_pass'])){
				include("change_pass.php");
				}
				if(isset($_GET['delete_account'])){
				include("delete_account.php");
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