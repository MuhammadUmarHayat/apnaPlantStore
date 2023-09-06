
<?php include '../config.php';

// Get image data from database 
$result = $con->query("SELECT * FROM `products`");

?>
<!-- php script  -->
<?php

/*
session_start();

if ($_SESSION['userid'] == null) {
    header('Location:' . 'logout.php');
} else {
    $userid = $_SESSION['userid'];
    echo "<h2> Welcome " . $userid . "</h2>";
}
*/
?>


<?php include("header.php")?>
<br><br><br><br>
<h2>List of All Products</h2>
<table border=1>
                    <tr>
                    
                        <th>#</th>
                        <th> Title</th>
                       
                        <th> category</th>
                        <th> Photo</th>
                       
                        <th> Purchasing Price</th>
                        <th> Old Sale Price</th>
                        <th> New Sale Price</th>
                       
                        <th> Quantity</th>
                       
                        <th> </th>
                        <th> </th>
                    </tr>
                    <?php if ($result->num_rows > 0) { ?>



                        <?php while ($row = $result->fetch_assoc()) {
                            
                         
                            
                            ?>


                            <tr>
                            
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['title'] ?></td>
                                <td><?php echo $row['category'] ?></td>
                                <td>  <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>" width=50px height=50px /> </td>
                                <td><?php echo $row['purchasing_price'] ?></td>
                                <td><?php echo $row['salling_old_price'] ?></td>
                                <td><?php echo $row['selling_new_price'] ?></td>
                                <td><?php echo $row['qty'] ?></td>
                                <td><?php echo '<a style="color: #1BA098; text-decoration: none;"  href="editproduct.php?id=' . $row['id'] . '">Edit Details</a>';


                                    ?></td>
                                <td> <?php echo '<a style="color: #1BA098; text-decoration: none;" href="deleteProduct.php?id=' . $row['id'] . '">Delete Details</a>';
                                        ?></td>
                            </tr>
                        <?php



                        } ?>

                    <?php } else { ?>
                        <p class="status error">Image(s) not found...</p>
                    <?php } ?>

                </table> 
</body>
</html>