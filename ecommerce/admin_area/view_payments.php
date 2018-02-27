<table width="795" align="center" bgcolor="Burlywood"> 

	
	<tr align="center">
		<td colspan="6"><h2>View all payments here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>S.N</th>
		<th>Customer Email</th>
		<th>book (S)</th>
		<th>Paid Amount</th>
		<th>Transaction ID</th>
		<th>Payment Date</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_payment = "select * from payments";
	
	$run_payment = mysqli_query($con, $get_payment); 
	
	$i = 0;
	
	while ($row_payment=mysqli_fetch_array($run_payment)){
		
		$amount = $row_payment['amount'];
		$trx_id = $row_payment['trx_id']; 
		$payment_date = $row_payment['payment_date'];
		$book_id = $row_payment['book_id'];
		$c_id = $row_c['customer_id'];
		
		$i++;
		
		$get_book = "select * from books where book_id='$book_id'";
		$run_book = mysqli_query($con, $get_book); 
		
		$row_book=mysqli_fetch_array($run_book); 
		
		$book_image = $row_book['book_image']; 
		$book_title = $row_book['book_title'];
		
		$get_c = "select * from customers where customer_id='$c_id'";
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
		<td><?php echo $amount;?></td>
		<td><?php echo $trx_id;?></td>
		<td><?php echo $payment_date;?></td>
	
	</tr>
	<?php } ?>
</table>