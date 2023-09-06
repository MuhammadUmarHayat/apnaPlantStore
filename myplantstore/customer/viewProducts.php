<?php include '../config.php';?>

<?php
session_start();// start the session

if(isset($_POST['checkout']))
{
	header('Location:'.'viewCart.php');
}

$customername=$_SESSION['username'] ;
echo "<h1> Welcome : ".$customername."</h1>";
$productid;
if(isset($_GET['id']))//add to cart
{
 $productid=$_GET['id'];

$_SESSION["productid"] =$productid;

$productid=$_SESSION["productid"];
}

if(isset($_POST['done']))//add to cart
{
	
	$cusId = $customername;
            $productid=$_POST['id'];
			
 $result = $con->query("SELECT * FROM products where id= '$productid'"); 

 if($result->num_rows > 0)
 {
	 
	$row = $result->fetch_assoc();
	
$price = $row['selling_new_price'];
			
$qty=	$_POST['qty'];		
	$TotalPrice=$price*$qty;


                                              echo"<br> cusId ".$cusId." productid ".$productid." price ".$price." qty ".$qty." TotalPrice ".$TotalPrice;
	
			$status="added";
			
		$q1="INSERT INTO `carts`( `plantid`, `customerid`, `unitprice`, `qty`, `total`, `remarks`) VALUES ('$productid','$cusId','$price','$qty','$TotalPrice','$status')";	
			$query = mysqli_query($con,$q1);
 	echo"thank you";
	
	header('Location:'.'index.php');
 }
	
	
	
	
	
	
}

include "header.php";

$result = $con->query("SELECT * FROM products where id= '$productid'"); 

 if($result->num_rows > 0)
 {
	$row = $result->fetch_assoc();
	
	
	

?>


   <form method="POST" action="ViewProducts.php">
   <?php 
   
   $unitPrice=$row['selling_new_price'];
	 $title=$row['title'];
	 $category=$row['category'];

   
   ?>
   <br>
   <br>
   <center>
<table border=1>

<tr><td></td>
<td></td><td></td><td></td><td></td>
</tr>
<tr><th>Product NO</th><th>Name</th><th>category</th><th>price</th><th>Choose Quantity</th></tr>
<tr><td><?php echo $productid;  ?></td>
<td><?php echo $title;  ?></td>
<td><?php echo $category;  ?></td><td>
<?php echo $unitPrice;  ?></td><td> Quantity:
	   <select name ="qty" id="qty">  
  <option value="Select" >--Select--</option> 
  <option value="1">1</option>  
  <option value="2">2</option>  
  <option value="3">3</option>  
  <option value="4">4</option>  
  <option value="5">5</option>  
  <option value="6">6</option>  
  <option value="7">7</option>  
  <option value="8">8</option>  
  <option value="9">9</option>  
  <option value="10">10</option>
</select>
<input type="hidden" id="id" name="id" value="<?php echo $row['id']?>">
</td></tr>
<tr><td></td><td><button class="button1" type="submit" name="done" >Add to Cart <i class="fa fa-shopping-cart"></i></button></td><td></td><td></td></tr>

</table>
 </center>
 	 
<?php		
 }

?>

                    
                </form>
            </div>
        </div>
    </main>
</div>
</body>
</html>