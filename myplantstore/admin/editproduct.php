<?php include '../config.php';
 
if(isset($_POST["submit"]))
{





$id= $_GET['id'];
//`salling_old_price`
//`selling_new_price`
	//plant_id,`title`,  `category`, `purchasing_price`, `sale_price`, `quantity`	
$title= $_POST['title'];
$category=$_POST['category'];
$purchasing_price=$_POST['purchasing_price'];
$salling_old_price=$_POST['salling_old_price'];
$selling_new_price=$_POST['selling_new_price'];
$quantity=$_POST['quantity'];
		
	echo $sql="UPDATE `products` SET `title`='$title',`category`='$category',`purchasing_price`='$purchasing_price',`salling_old_price`='$salling_old_price',`selling_new_price`='$selling_new_price',`qty`='$quantity' where  `id`='$id'";
	
	$insert = $con->query($sql); 
             if($insert){ 
                $status = 'success'; 
                echo $statusMsg = "Record is updates successfully."; 
            }else{ 
               echo $statusMsg = "Failed, please try again."; 
            }  
	
	
	
	
}


$id= $_GET['id'];
$title="";
$category="";
$purchasing_price=0;
$salling_old_price=0;
$selling_new_price=0;

$quantity=0;

$result = $con->query("SELECT * FROM `products` where  `id`='$id'"); 
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
			
     
		//title,category,purchasing_price,sale_price,quantity	
		


     
		
	    $title= $row['title'];
        $category= $row['category'];
        $purchasing_price= $row['purchasing_price'];
        $salling_old_price= $row['salling_old_price'];
        $selling_new_price= $row['selling_new_price'];
        $quantity= $row['qty'];
		
		
		
		
}
}




?>
 <?php include("header.php")?>
<br><br><br><br>
<center>
<h1>
Edit Product Details!
</h1>
<br>
<form action="editproduct.php?id=<?php echo $id; ?>" method="post">
<table>


<tr><td>Plant ID</td><td><?php echo $id; ?></td></tr>
<tr><td>Title</td><td><input type="Text" name="title" value="<?php echo $title; ?>"></td></tr>

<tr><td>Category</td><td><input type="Text" name="category" value="<?php echo $category; ?>"></td></tr>
<tr><td>Purchasing price</td><td><input type="number" name="purchasing_price" value="<?php echo $purchasing_price; ?>"></td></tr>
<tr><td>Sale New price</td><td><input type="number" name="selling_new_price" value="<?php echo $selling_new_price; ?>"></td></tr>
<tr><td>Sale Old price</td><td><input type="number" name="salling_old_price" value="<?php echo $salling_old_price; ?>"></td></tr>
<tr><td>Quantity</td><td><input type="number" name="quantity" value="<?php echo $quantity; ?>"></td></tr>

</td></tr>
<tr><td></td><td><input class="button1" type="submit" name="submit" value="Save Changes"></td></tr>


</table>
</form>
</center>
</body>
</html>
   