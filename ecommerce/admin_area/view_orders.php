<table width="795" align="center" bgcolor="Burlywood"> 

	
	<tr align="center">
		<td colspan="6"><h2>View all orders here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>S.N</th>
		<th>user email</th>
		<th>book(S)</th>
		<th>Quantity</th>
		<th>Order Date</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_order = "select * from orders";
	
	$run_order = mysqli_query($con, $get_order); 
	
	$i = 0;
	
	while ($row_order=mysqli_fetch_array($run_order)){
		
		$order_id = $row_order['order_id'];
		$qty = $row_order['qty'];
		$book_id = $row_order['b_id'];
		$c_id = $row_order['c_id'];
		$order_date = $row_order['order_date'];
		$i++;
		
		$get_book = "select * from books where book_id='$book_id'";
		$run_book = mysqli_query($con, $get_book); 
		
		$row_book=mysqli_fetch_array($run_book); 
		
		$book_image = $row_book['book_image']; 
		$book_title = $row_book['book_title'];
		
		$get_c = "select * from customer where customer_id='$c_id'";
		$run_c = mysqli_query($con, $get_c); 
		
		$row_c=mysqli_fetch_array($run_c); 
		
		$c_email = $row_c['customer_email'];
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $c_email; ?></td>
		<td>
		<?php echo $book_title;?><br>
		<img src="../admin_area/book_images/<?php echo $book_image;?>" width="50" height="50" />
		</td>
		<td><?php echo $qty;?></td>
		<td><?php echo $order_date;?></td>
	
	</tr>
	<?php } ?>
</table>