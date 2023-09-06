<?php include '../config.php';
session_start();// start the session
$customername=$_SESSION['username'] ;
//$_SESSION['username'] =$customername;
echo "<h1> Welcome : ".$customername."</h1>";
$productid;
include "header.php";

$result = $con->query("SELECT * FROM carts where `customerid`= '$customername'"); 

 
    ?> 

<table border=1>


<tr> 
     <th>#</th>
<th>Product Number</th>
<th>Customer Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th> 
<th></th>
<th></th>
</tr>


<?php
if($result && $result->num_rows > 0)
{ while ($row = $result->fetch_assoc())
      {
        //`id`, `plantid`, `customerid`, `unitprice`, `qty`, `total`
        ?>
        <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['plantid'] ?></td>
        <td><?php echo $row['customerid'] ?></td>
        <td><?php echo $row['unitprice'] ?></td>
        <td><?php echo $row['qty'] ?></td>
        <td><?php echo $row['total'] ?></td>
        <td><?php echo '<a style="color: #1BA098; text-decoration: none;"  href="editCart.php?id=' . $row['id'] . '">Edit Quantity</a>';?> </td>
        <td><?php echo '<a style="color: #1BA098; text-decoration: none;"  href="deleteCart.php?id=' . $row['id'] . '">Remove From Cart</a>';?> </td>
        
     </tr>
        <?php
      }
    }	

?>
</table>