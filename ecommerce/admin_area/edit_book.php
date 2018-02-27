<!DOCTYPE>

<?php 

include("includes/db.php");

if(isset($_GET['edit_book'])){

	$get_id = $_GET['edit_book']; 
	
	$get_book = "select * from books where book_id='$get_id'";
	
	$run_book = mysqli_query($con, $get_book); 
	
	$i = 0;
	
	$row_book=mysqli_fetch_array($run_book)  or die("Error: ".mysqli_error($con));;
		
		$book_id = $row_book['book_id'];
		$book_title = $row_book['book_title'];
		$book_image = $row_book['book_image'];
		$book_price = $row_book['book_price'];
		$book_desc = $row_book['book_desc']; 
		$book_keywords = $row_book['book_keywords']; 
		$book_cat = $row_book['book_cat'];
		
		
		$get_cat = "select * from categories where cat_id='$book_cat'";
		
		$run_cat=mysqli_query($con, $get_cat); 
		
		$row_cat=mysqli_fetch_array($run_cat); 
		
		$category_title = $row_cat['cat_name'];
		
		
}
?>
<html>
	<head>
		<title>Update book</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	
<body bgcolor="skyblue">


	<form action="" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae">
			
			<tr align="center">
				<td colspan="7"><h2>Edit & Update book</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>book Title:</b></td>
				<td><input type="text" name="book_title" size="60" value="<?php echo $book_title;?>"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>book Category:</b></td>
				<td>
				<select name="book_cat" >
					<option><?php echo $category_title; ?></option>
					<?php 
		$get_cats = "select * from categories";
	
		$run_cats = mysqli_query($con, $get_cats);
	
		while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$cat_id = $row_cats['cat_id']; 
		$cat_title = $row_cats['cat_name'];
	
		echo "<option value='$cat_id'>$cat_title</option>";
	
	
	}
					
					?>
				</select>
				
				
				</td>
			</tr>
			
			
			
			<tr>
				<td align="right"><b>book Image:</b></td>
				<td><input type="file" name="book_image" /><img src="book_images/<?php echo $book_image; ?>" width="60" height="60"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>book Price:</b></td>
				<td><input type="text" name="book_price" value="<?php echo $book_price;?>"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>book Description:</b></td>
				<td><textarea name="book_desc" cols="20" rows="10"><?php echo $book_desc;?></textarea></td>
			</tr>
			
			<tr>
				<td align="right"><b>book Keywords:</b></td>
				<td><input type="text" name="book_keywords" size="50" value="<?php echo $book_keywords;?>"/></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="update_book" value="Update book"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['update_book'])){
	
		//getting the text data from the fields
		
		$update_id = $book_id;
		
		$book_title = $_POST['book_title'];
		$book_cat= $_POST['book_cat'];
		$book_brand = $_POST['book_brand'];
		$book_price = $_POST['book_price'];
		$book_desc = $_POST['book_desc'];
		$book_keywords = $_POST['book_keywords'];
	
		//getting the image from the field
		$book_image = $_FILES['book_image']['name'];
		$book_image_tmp = $_FILES['book_image']['tmp_name'];
		
		move_uploaded_file($book_image_tmp,"book_images/$book_image");
	
		 $update_book = "update books set book_cat='$book_cat',book_title='$book_title',book_price='$book_price',book_desc='$book_desc',book_image='$book_image', book_keywords='$book_keywords' where book_id='$update_id'";
		 
		 $run_book = mysqli_query($con, $update_book);
		 
		 if($run_book){
		 
		 echo "<script>alert('book has been updated!')</script>";
		 
		 echo "<script>window.open('index.php?view_books','_self')</script>";
		 
		 }
	}








?>












