<!DOCTYPE html>

<?php

include("includes/db.php");
?>

<html>
<head>
<title>Inserting Book</title>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
</head>

<body bgcolor="blue">
	<form action="insert_book.php" method="post" enctype="multipart/form-data">
		<table align="center" width="700" border="2" bgcolor="Burlywood">
			<tr align="center">
				<td colspan="7"><h2>Insert New Book Here</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Book Title:</b></td>
				<td><input type="text" name="book_title" size="60" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Book Category:</b></td>
				<td>
					<select name="book_cat" >
						<option>select a category</option>
						<?php
						$get_cats = "select * from categories";
	
						$run_cats = mysqli_query($con,$get_cats);
	
						while($row_cats=mysqli_fetch_array($run_cats))
						{
							$cat_id = $row_cats['cat_id'];
							$cat_name = $row_cats['cat_name'];
		
							echo "<option value='$cat_id'>$cat_name</option>";
						}
						?>
					</select>
				
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Book Image</b></td>
				<td><input type="file" name="book_image" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Book Price:</b></td>
				<td><input type="text" name="book_price" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Book Description:</b></td>
				<td><textarea name="book_desc" cols="20" rows="10" ></textarea></td>
			</tr>
			
			<tr>
				<td align="right"><b>Book Keywords:</b></td>
				<td><input type="text" name="book_keywords" size="50" required/></td>
			</tr>
			
			<tr>
				<td colspan="7" align="center"><input type="submit" name="insert_book" value="Add Book"/></td>
			</tr>
		
		</table>
 



</body>




</html>




<?php

	if(isset($_POST['insert_book']))
	{
		
		//getting the text data from the fields
		$book_title = $_POST['book_title'];
		$book_cat = $_POST['book_cat'];
		//if(isset($_POST['book_cate'])){ $book_cat = $_POST['book_cate']; }
		$book_price = $_POST['book_price'];
		$book_desc = $_POST['book_desc'];
		$book_keywords = $_POST['book_keywords'];
		
		
		//getting the image2wbmp
		$book_image = $_FILES['book_image']['name'];
		$book_image_tmp = $_FILES['book_image']['tmp_name'];
		
		move_uploaded_file($book_image_tmp,"book_images/$book_image");
		
		$insert_query = "insert into books(book_cat,book_title,book_price,book_desc,book_image,book_keywords) values('$book_cat','$book_title','$book_price','$book_desc','$book_image','$book_keywords')";
		
		$insert_result = mysqli_query($con, $insert_query);
		
		if($insert_result)
		{
				echo "<script>alert('Book has been inserted')</script>";
				echo "<script>window.open('insert_book.php','_self')</script>";
			
		}
		
	}
	

?>