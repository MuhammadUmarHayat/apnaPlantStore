<?php include '../config.php';
session_start();
?>
<?php 

	$customerID="";
$amount=0;
$customerID=$_SESSION["username"] ;
$_SESSION["userid"] =$customerID;

	
 
$result = mysqli_query($con, 'SELECT SUM(`total`) AS value_sum FROM carts'); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];
$amount=$sum ;
//echo "<br> <h2>Total Amount : ".$sum."</h2>";

if(isset($_POST['done']))
{
if(!empty($_POST)) 
{
	
	// echo "$fname Refsnes.<br>";
 	try 
	{ 
       //empty the cart when order is places
 
			
          $cusID = $customerID;
           
			 $status = "paid";
			 $bankname= $_POST['bankname'];
			          $accountNumber= $_POST['accountNumber'];
					  
		$method="";			  
				
	
	$method="cod";//cash on delivery
	
	//save order////////////////
	
	$orderid=rand(111,999);
	$_SESSION["orderid"]=$orderid;
$result = $con->query("SELECT * FROM `carts` WHERE customerid='$customerID'"); 
 if($result->num_rows > 0)
 { 

 while($row = $result->fetch_assoc())
 {
	
	 
	echo $row['id']."-".$row['customerid']."-".$row['plantid']."-".$row['unitprice']."-".$row['qty']."-".$row['total']."<br>";
	
	$cusId=$row['customerid'];
	
	$productid=$row['plantid'];
	$price=$row['unitprice'];
	$quantity=$row['qty'];
	$status="paid";
	$total=$row['total'];
	
	$date=date("Y/m/d");
$q1="INSERT INTO `orders`(`order_id`,`customerid`, `plant_id`, `unitPrice`, `quantity`, `total`, `status`, `createdat`) VALUES ('$orderid','$cusId','$productid','$price','$quantity','$total','$status','$date')";
			 $query = mysqli_query($con,$q1);	


$result1 = $con->query("SELECT * FROM  `porducts` WHERE `id`='$productid'"); 
 if($result1->num_rows > 0)
 { 

 $row1 = $result1->fetch_assoc();//fetch a single row
 
$title=$row1['title'];
$productid12=$row1['id'];

$status="sold";
$date=date("Y/m/d");

$q12="INSERT INTO `sale_products`(`title`, `plant_id`, `qty`, `status`, `date_of_sale`) VALUES ('$title','$productid12','$quantity','$status','$date')";
 $query12 = mysqli_query($con,$q12);	

 
 
 }



	
 }//end loop
 
 
 
 
 
 
 }
 else
 {
	 
	 
	  echo "No orders are found!";
 
 }
	
	
	
	
	//remove the cart
	
	$q2="DELETE FROM `carts`";
			 $query = mysqli_query($con,$q2);	

 


	
	
			$query="";
		
			$accountTitle=$bankname;
			$accountNo=$accountNumber;
			$csv="-";
			$remaks="paid";
			$createdat=date("Y-m-d");
			
				                                                                                    //INSERT INTO `customer_payments`(`customerid`, `orderid`, `orderdate`, `amount`, `method`, `accountTitle`, `accountNo`, `csv`, `remarks`, `createdat`) 
			 $q1="INSERT INTO `customer_payments`(`customerid`, `orderid`, `orderdate`, `amount`, `method`, `accountTitle`, `accountNo`, `csv`, `remarks`, `createdat`)  VALUES ('$cusID', '$orderid`,'$createdat', '$amount','$method','$accountTitle','$accountNo','$csv','$remaks','$createdat')";
			 " result".$query = mysqli_query($con,$q1);	
			 $_SESSION['orderno']=$orderid ;
			header('Location:'.'ThankYou.php');
				echo 'Thank you for payment!';
				
				
		
			
	}
	
	
 catch(Exception $e) 
 {
  echo 'Message: ' .$e->getMessage();
}
 
		
	
}
	

else
{
	
	
	
	echo "Please fill the form first";
}
}



include "header.php"

?>

<br>
				<br>
<div >

                <form method="POST" action="CustomerPayments.php">
				
				  
				<table>
				
				
				
				
				
				
				
				
				
				
				
				<tr><td> Enter cusID:</td><td> <?php  echo $customerID; //$amount?></td></tr>
				
		<tr><td> Enter  your complete name:</td><td> <input type="text" name="bankname"></td></tr>		
				
				 <tr><td> Enter  your current address:</td><td> <input type="text" name="accountNumber"></td></tr>
				
					
				<tr><td> Enter  payment amount:</td><td> <?php  echo $amount;?></td></tr>
				
				<tr><td> </td><td> <button class="button2" type="submit" name="done" >Submit</button></td></tr>			


                    
					</table>
                </form>
            </div>
        </div>
    </main>
</div>
</body>
</html>