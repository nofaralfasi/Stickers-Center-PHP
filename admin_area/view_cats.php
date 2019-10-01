
<table class="view_pro_table">

	<tr align="center">
		<td colspan="6"><h2>View All Categories Here</h2></td>
	</tr>


<style>
.view_pro_table td a { text-decoration:none}
</style>
	
	<tr align="center" bgcolor="skyblue">
		<th>Category ID</th>
		<th>Category Title</th>
		<th>Products in category</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_cat = "select * from categories";
	
	$run_cat = mysqli_query($con, $get_cat); 
	
	$i = 0;
	
	while ($row_cat=mysqli_fetch_array($run_cat)){
		
		$cat_id = $row_cat['cat_id'];
		$cat_title = $row_cat['cat_title'];
		$i++;



if ($result = mysqli_query($con, "SELECT product_id FROM products WHERE product_cat = '$cat_id' ")) {

$row_cnt = mysqli_num_rows($result);


}

	
	?>


	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $cat_title;?></td>
		<td><?php echo $row_cnt ?></td>
		<td>
		<a href="index.php?edit_cat=<?php echo $cat_id; ?>" class="btn btn-info" role="button">Edit</a>
		<td>
		<a href="delete_category.php?delete_cat=<?php echo $cat_id;?>" class="btn btn-danger" role="button">Delete</a>
	</tr>


<?php } ?>



</table>