<?php

$con = mysqli_connect("localhost","root","","ecommerce");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to mysql ".mysql_connect_error();
	}
function getIp()
{
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;	
}
	
function cart()
{
	if(isset($_GET['add_cart']))
	{
		global $con;
		$ip = getIp();
		$boo_id = $_GET['add_cart'];
		$check_book = "select * from cart where ip_add='$ip' and b_id = '$book_id'";
		$run_check = mysqli_query($con, $check_book);
		
		if(mysqli_num_rows($run_check)>0)
		{
			echo "";
		}
		else
		{
			$insert_book = "insert into cart (b_id,ip_add) values ('$boo_id','$ip')";
			
			$run_book = mysqli_query($con, $insert_book);
			
			echo "<script>window.open('index.php','_self')</script>";
		}
	}
	
}

function total_books(){
 
	if(isset($_GET['add_cart'])){
	
		global $con; 
		
		$ip = getIp(); 
		
		$get_books = "select * from cart where ip_add='$ip'";
		
		$run_books = mysqli_query($con, $get_books); 
		
		$count_books = mysqli_num_rows($run_books);
		
		}
		
		else {
		
		global $con; 
		
		$ip = getIp(); 
		
		$get_books = "select * from cart where ip_add='$ip'";
		
		$run_books = mysqli_query($con, $get_books); 
		
		$count_books = mysqli_num_rows($run_books);
		
		}
	
	echo $count_books;
	}
	
//getting the total price of all the items in the cart

function total_price()
{
	
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
			
			$values = array_sum($book_price);
			
			$total +=$values;
		}
	}
	
	echo "Rs.".$total;
}

//getting the categories

function getcats()
{
	global $con;
	$get_cats = "select * from categories";
	
	$run_cats = mysqli_query($con,$get_cats);
	
	while($row_cats=mysqli_fetch_array($run_cats))
	{
		$cat_id = $row_cats['cat_id'];
		$cat_name = $row_cats['cat_name'];
		
		echo "<li><a href='index.php?cat=$cat_id'>$cat_name</a></li>"; 
	}
}

function getbook()
{
	if(!isset($_GET['cat'])) 
	{
		
	global $con;
	
	 $get_book = "select * from books order by RAND() LIMIT 0,6";
	 
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
					<a href='index.php?add_cart=$book_id'><button style='float:right; '>add to cart</button></a>
					
				
				</div>
		 
		 ";
	 }
	}
	 
}

function getcatbook()
{
	if(isset($_GET['cat'])) 
	{
		$cat_id = $_GET['cat'];
	global $con;
	
	 $get_cat_book = "select * from books where book_cat = $cat_id";
	 
	 $run_cat_book = mysqli_query($con, $get_cat_book);
	 
	 $count_cat_book = mysqli_num_rows($run_cat_book);
	 if($count_cat_book==0)
	 {
		 echo "<h3>There is no book associated with this category<h3>";
		 
	 }
	 
	 while($row_cat_book = mysqli_fetch_array($run_cat_book))
	 {
		 $book_id = $row_cat_book['book_id'];
		 $book_cat = $row_cat_book['book_cat'];
		 $book_title = $row_cat_book['book_title'];
		 $book_price = $row_cat_book['book_price'];
		 $book_image = $row_cat_book['book_image'];
		 
		 
		 
		 echo "
				<div id='single_book' >
					<h3>$book_title</h3>
					<img src='admin_area/book_images/$book_image' width='180' height='180'/>
					<p><b>Price: Rs.$book_price</b></p>
					
					<a href='details.php?book_id=$book_id' style='float:left;'>Details</a>
					<a href='index.php?add_cart=$book_id'><button style='float:right; '>add to cart</button></a>
					
				
				</div>
		 
		 ";
		
	 }
	}
	 
}








?>