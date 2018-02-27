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
			<a href="indez.php" style="color:yellow;">Back To Shop</a>
			
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
			<br>
				<form action="" method="post" enctype="multipart/form-data">
					<table align="center" width="700" bgcolor="skyblue">
						<tr align="center">
							<td colspan="5"><h2>Update your cart or checkout<h2><td>
						</tr>
						
						<tr align = "center">
							<th>Remove</th>
							<th>Book(s)</th>
							<th>Quantity</th>
							<th>Total Price</th>
						</tr>
						
						<?php
						
							$total = 0;
	
							global $con;
	
							$ip = getIp();
	
							$sel_price = "select * from cart where ip_add = '$ip'";
	
							$run_price = mysqli_query($con,$sel_price);
	
							while($b_price = mysqli_fetch_array($run_price))
							{
								$book_id = $b_price['b_id'];
		
								$book_price = "select * from books where book_id = '$book_id'";
		
								$run_book_price = mysqli_query($con,$book_price);
		
								while($bb_price = mysqli_fetch_array($run_book_price))
								{
			
									$book_price = array($bb_price['book_price']);
									$book_title = $bb_price['book_title'];
									$book_image = $bb_price['book_image'];
									$single_price = $bb_price['book_price'];
									$values = array_sum($book_price); 
			
									$total += $values; 
									
								
							
	
							
						?>
						
						<tr align="center">
							<td><input type="checkbox" name="remove[]" value=<?php echo $book_id;?> /></td>
							<td><?php echo $book_title; ?><br>
							<img src="admin_area/book_images/<?php echo $book_image; ?>" width="120" height="120"/>
							</td>
							<td><input type="text" size="4" name="qty" /></td>
							<?php
							if(isset($_POST['update_cart']))
							{
								$qty = $_POST['qty'];
								$update_qty = "update cart set qty = '$qty'";
								$run_qty = mysqli_query($con, $update_qty); 
							
								$_SESSION['qty']=$qty;
							
								$total = $total*$qty;
							}
							?>
							<td><?php echo "Rs.".$single_price;?></td>
						</tr>
						
						<?php 
								}
							}
						?>
						
						<tr>
							<td colspan="4" align="right"><b>Sub Total:</b></td>
							<td><?php echo "$" . $total;?></td>
						</tr>
						
						<tr align="center">   
							<td colspan="2"><input type="submit" name="update_cart" value="Update Cart"/></td>
							<td><input type="submit" name="continue" value="Continue Shopping" /></td>
							<td><input type="submit" name="checkout" value="place order" /></td>
						</tr>
					
					</table>
				
				</form>
				
				<?php
					function updatecart()
					{
					global $con;
					$ip = getIp();
					if(isset($_POST['update_cart']))
					{
						foreach($_POST['remove'] as $remove_id)
						{
							$delete_book = "delete from cart where b_id = '$remove_id' and ip_add = '$ip'";
							$run_delete = mysqli_query($con,$delete_book);
							if($run_delete)
							{
								echo "<script>window.open('cart.php','_self')</script>"; 
							}
						}
						
					}
					
					
					if(isset($_POST['continue']))
					{
						echo "<script>window.open('index.php','_self')</script>"; 
					}
					if(isset($_POST['checkout']))
					{
						echo "<script>window.open('place_order.php','_self')</script>"; 
					}
					}
					echo @$up_cart = updatecart();
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