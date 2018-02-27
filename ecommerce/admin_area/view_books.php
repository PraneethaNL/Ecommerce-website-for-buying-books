<?php 
if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>
<table width="795" align="center" bgcolor="Burlywood"> 

	
	<tr align="center">
		<td colspan="6"><h2>View All Books Here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>S.N</th>
		<th>Title</th>
		<th>Image</th>
		<th>Price</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_book = "select * from books";
	
	$run_book = mysqli_query($con, $get_book); 
	
	$i = 0;
	
	while ($row_book=mysqli_fetch_array($run_book)){
		
		$book_id = $row_book['book_id'];
		$book_title = $row_book['book_title'];
		$book_image = $row_book['book_image'];
		$book_price = $row_book['book_price'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $book_title;?></td>
		<td><img src="book_images/<?php echo $book_image;?>" width="60" height="60"/></td>
		<td><?php echo $book_price;?></td>
		<td><a href="index.php?edit_book=<?php echo $book_id; ?>">Edit</a></td>
		<td><a href="delete_book.php?delete_book=<?php echo $book_id;?>">Delete</a></td>
	
	</tr>
	<?php } ?>
</table>

<?php } ?>