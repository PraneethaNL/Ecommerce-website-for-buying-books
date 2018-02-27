<table width="700" align="center" bgcolor="Burlywood"> 

	
	<tr align="center">
		<td colspan="6"><h2>Your Orders details:</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>S.N</th>
		<th>Book(s)</th>
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
		$order_date = $row_order['order_date'];
		$i++;
		
		$get_book = "select * from books where book_id='$book_id'";
		$run_book = mysqli_query($con, $get_book); 
		
		$row_book=mysqli_fetch_array($run_book); 
		
		$book_image = $row_book['book_image']; 
		$book_title = $row_book['book_title'];
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td>
		<?php echo $book_title;?>
		<img src="../admin_area/book_images/<?php echo $book_image;?>" width="50" height="50" />
		</td>
		<td><?php echo $qty;?></td>
		<td><?php echo $order_date;?></td>
	
	</tr>
	<?php } ?>
</table>