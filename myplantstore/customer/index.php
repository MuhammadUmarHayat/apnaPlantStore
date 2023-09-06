
<?php include '../config.php';

session_start();

$customername=$_SESSION['username'] ;
//$_SESSION['username'] =$customername;

if(isset($_POST['submit']))
{
    $productid=$_POST['id'];
    $_SESSION["productid"]= $productid;
    header('Location:'.'viewProducts.php?id='.$productid);
}

if(isset($_POST['checkout']))
{
	header('Location:'.'checkout.php');
}

$_SESSION["cartid"]="";
	$cartID="";
 
	$result = mysqli_query($con, 'SELECT SUM(`total`) AS value_sum FROM `carts`'); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];
if(empty($sum))
{
$sum=0;
}

	



 $result;
 
if(isset($_POST['search']))
{
    echo "cliked";
   $title=$_POST['title'];
    $category=$_POST['title'];
  
   
 $query = "SELECT p.`id`, p.`title`, p.`description`, p.`photo`, p.`purchasing_price`, p.`salling_old_price`, p.`selling_new_price`, SUM(r.`likes` * r.`stars`) AS product_likes_stars_product FROM `products` p JOIN `reviews` r ON p.`id` = r.`productid` WHERE p.`category` = '$category' OR p.`title` = '$category' GROUP BY p.`id`, p.`title`, p.`description`, p.`photo`, p.`purchasing_price`, p.`salling_old_price`, p.`selling_new_price` ORDER BY product_likes_stars_product DESC";
 
 
    $result =$con->query($query);
   // $result = $con->query("SELECT * FROM `plants_table`");
  // var_dump($result);
    // $result = $con->query("SELECT * FROM `plants_table` where `category`='$category' or `title`='$title'");
}
else
{
// Get all data from database 
$query="SELECT p.`id`, p.`title`, p.`description`,p.photo, p.`purchasing_price`, p.`salling_old_price`, p.`selling_new_price`, SUM(r.`likes` * r.`stars`) AS product_likes_stars_product FROM `products` p JOIN `reviews` r ON p.`id` = r.`productid` GROUP BY p.`id`, p.`title`,p.photo, p.`description`, p.`purchasing_price`,p.`salling_old_price`,p.`selling_new_price` ORDER BY product_likes_stars_product DESC";
 $result = $con->query($query);
 
}

?>
<!-- php script  -->
<?php


?>

		<?php  include("header.php")?>
        <!-- header close -->
        
       
        
     
   
    
        

        <br><br>
   <center>
        <form action="index.php" method="post">
            <input  type="text" name="title" size="85px" style="font-size:16px;" placeholder="Search...">
            <button class="button2" type="submit" value="search" name="search"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <br><br>

        
    <!-- boxes start -->
    <section >
    <?php 
   
echo "<br> <h2> Total Amount : ".$sum."</h2>";

?>

</center>

    

        
<form action="index.php" method="post">      

<br><br><br><br><br><br>
<section class="flex-property">

<?php
  if ($result && $result->num_rows > 0) 
  {
     while ($row = $result->fetch_assoc())
      {
    ?>  
     
    <div class="border">
        <h5 class="plant-text"><?php echo $row['title'] ?></h5>
        <p><?php echo $row['description'] ?></p>
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>" width=50px height=50px />
        <p>New Price<?php echo $row['selling_new_price'] ?></p>
        
        <p>Old Price<div class="c"><?php echo $row['salling_old_price'] ?></div></p>
        
        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?php echo $row['product_likes_stars_product'] ?>  <i class='far fa-heart' style='font-size:24px;color:red'></i> <?php echo $row['product_likes_stars_product'] ?></p>
        <input type="hidden" id="id" name="id" value="<?php echo $row['id']?>">
        <button class="button1" type="submit" name="submit" >Add to Cart <i class="fa fa-shopping-cart"></i><button>
    </div>

  <?php  
  }
  }
  ?>

  </form>






   
</div>

      </div>
     </section>
     <!-- boxes close -->

        

                            
                       
                    

     
                </table> 
              
      </div>

    
    

 </body>
</html>


