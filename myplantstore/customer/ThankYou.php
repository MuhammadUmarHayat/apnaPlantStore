<?php include '../config.php';?>
<?php
	session_start();
    $customerID="";

$customerID=$_SESSION["username"] ;
$orderid=$_SESSION["orderid"];
"<h3> Thank you : ".$customerID."</h3>";

if(isset($_POST['done']))
{
	
	header('Location:'.'feedback.php');

}


?>


<?php
$result = $con->query("SELECT * FROM `orders` where `customerid` ='$customerID' and `order_id`='$orderid'"); 

include "header.php"
?>


	<script>
    function doPrint() {
        var prtContent = document.getElementById('div1');
        prtContent.border = 0; //set no border here
        var WinPrint = window.open('', '', 'left=100,top=100,width=1000,height=1000,toolbar=0,scrollbars=1,status=0,resizable=1');
        WinPrint.document.write(prtContent.outerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
</script>



   <form method="POST" action="ThankYou.php">
<div id="div1">

<h2>Your Receipet</h2>
<table border=1>
<tr>
<th>Order No</th>
 <th>Customer ID </th>
    <th>Product ID</th>
    <th>Unit Price</th>
    <th>Quantity</th>
    <th>Total</th>
    
    
</tr>
<?php
if($result && $result->num_rows > 0)
 {
	while($row = $result->fetch_assoc())
	{		
	
?>
<tr>
<td><?php  echo $row['order_id'];?></td>
 <td><?php echo $row['customerid']; ?></td>
    <td><?php echo  $row['plant_id']; ?></td>
    <td><?php echo $row['unitPrice'];?></td>
    <td><?php echo $row['quantity'];?></td>
    <td><?php echo $row['total'];?> </td>

    </tr>


<?php
 }
 }
 ?>
 </table>
 

	
</div>
<button class="button1" type="submit" name="print" onclick="doPrint()" >Print Receipet</button>
<br>
<button type="submit" name="done">Send Feedback /Suggestions</button>	 

                </form>
            
        
    </main>
</div>
</body>
</html>