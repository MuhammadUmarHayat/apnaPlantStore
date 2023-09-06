<?php include '../config.php';
$title="";
$qty="";
$price="";
 
if(isset($_POST["submit"]))
{





$id= $_GET['id'];
		
 $qty= $_POST['qty'];
$unitprice= 0;
$result = $con->query("SELECT * FROM `carts` where  `id`='$id'"); 
if($result->num_rows > 0)
{
	$row = $result->fetch_assoc();
   $unitprice= $row['unitprice'];
}
	

 $total=$unitprice*$qty;

		
		
	$sql="UPDATE `carts` SET `qty`='$qty',`total`='$total' where  `id`='$id'";
		
		
		
		
		
	
	$insert = $con->query($sql); 
             if($insert){ 
                $status = 'success'; 
                echo $statusMsg = "Record is updates successfully."; 
            }else{ 
               echo $statusMsg = "Failed, please try again."; 
            }  
            header('Location:'.'viewCart.php');
	
	
	
}


$id= $_GET['id'];

$result = $con->query("SELECT * FROM `carts` where  `id`='$id'"); 
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
			
     //   `description`
			
			
	


     
		
	    $title= $row['plantid'];
        $price= $row['unitprice'];
       $qty=$row['qty'];
		
		// $fullname,$userid,	 $address, $mobile, $phone
		
		
}
}




?>
 
<?php include("header.php")?>
<br><br><br><br>
<center>
<h1>
Edit Product Quantity!
</h1>
<br><br><br>
<form action="editCart.php?id=<?php echo $id; ?>" method="post">
<table>


<tr><td>Cart ID   </td><td><?php echo $id; ?></td></tr>
<tr><td>Product ID  </td><td><?php echo $title; ?></td></tr>
<tr><td>Product Price </td><td><?php echo $price; ?></td></tr>

<tr><td>Quantity</td><td><input type="Text" name="qty" value="<?php echo $qty; ?>"></td></tr>


</td></tr>
<tr><td></td><td><input class="button1" type="submit" name="submit" value="Save Changes"></td></tr>


</table>
</form>
</center>
