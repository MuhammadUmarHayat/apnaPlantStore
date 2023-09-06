<?php include '../config.php'; 

session_start();
$customerID="";
$customername=$_SESSION['username'] ;

$productid;
if(isset($_GET['id']))//add to cart
{
 $productid=$_GET['id'];

$_SESSION["productid"] =$productid;

$productid=$_SESSION["productid"];
}

if(isset($_POST['order']))
{
	header('Location:'.'CustomerPayments.php');
}
$customerID=$customername;
include "header.php";
?>






<div >

                <form method="POST" action="checkout.php">
				<br>
<br> 
<br>
<table border=1>
<tr><th>ID</th><th>customer Name</th><th>Product Number</th><th>unitPrice</th><th>Quantity</th><th>TotalPrice</th></tr>
<?php
// Get image data from database 
$result = $con->query("SELECT * FROM `carts` WHERE customerid='$customerID'"); 
 if($result->num_rows > 0)
 { 
 while($row = $result->fetch_assoc()){
  	 
	echo"<tr><td>".$row['id']."</td><td>".$row['customerid']."</td><td>".$row['plantid']."</td><td>".$row['unitprice']."</td><td>".$row['qty']."</td><td>".$row['total']."</td></tr>";
	     
 }
 }
 else{
	 
	 
	  echo "No orders are found!";
 }
 
 
 //////////////////////////
 $result = mysqli_query($con, 'SELECT SUM(`total`) AS value_sum FROM carts'); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];
echo "<br> <h2>Total Amount : ".$sum."</h2>";
 ?>
<br>
                    <button class="button2" type="submit" name="order">Place Order</button>
                </form>
            </div>
        </div>
    </main>
</div>
