<?php
include '../config.php';
session_start();
$username=   $_SESSION['username'] ;

$countUsers="SELECT count(`username`) AS total_users FROM `users`";
$result = mysqli_query($con, $countUsers); 
$row = mysqli_fetch_assoc($result); 
 $total_users = $row['total_users'];

 $q="SELECT count(id) AS total_product FROM `products`";
$result1 = mysqli_query($con, $q); 
$row1 = mysqli_fetch_assoc($result1); 
 $total_product = $row1['total_product'];


 
 $count="SELECT sum(purchasing_price) AS total_purchases FROM `products`";
$result2 = mysqli_query($con, $count); 
$row2 = mysqli_fetch_assoc($result2); 
 $total_purchases = $row2['total_purchases'];


$count="SELECT count(id) AS total_orders FROM `orders`";
$result = mysqli_query($con, $count); 
$row = mysqli_fetch_assoc($result); 
 $total_orders = $row['total_orders'];

 $count="SELECT count(total) AS totalearning FROM `orders`";
$result = mysqli_query($con, $count); 
$row = mysqli_fetch_assoc($result); 
 $totalearning = $row['totalearning'];



if(!isset($username))
{
    header('Location:'.'../logout.php');
}
else
{
     $username;
}

?>
 <?php  include("header.php")?>
    <h2>
        Admin Pannel | Wellcome  <?php echo  $username;?>
    </h2>
      <center>
        <table border=1>
        <tr><th> Total Views</th><td>150K</td></tr>
        <tr><th> Total Customers </th><td><?php echo $total_users?></td></tr>
        <tr><th> Total Products </th><td><?php echo $total_product?></td></tr>
        <tr><th> Total Purchases </th><td><?php echo $total_purchases?>PKR</td></tr>
        <tr><th> Total Orders </th><td><?php echo $total_orders?></td></tr>
        <tr><th> Total Sale</th><td><?php echo $totalearning?>PKR</td></tr>

</table>
</center>



</body>
</html>