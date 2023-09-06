

<?php
if(isset($_POST['submit']))
{
     header('Location:'.'login.php');
}
include("header.php");?>
<style>
    div.c {
   -webkit-text-decoration-line: line-through; /* Safari */
   text-decoration-line: line-through; 
}
     .button1{
    background-color: #3bab3d; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  } .button2{
    background-color: #3d3db7; /* Blue */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  </style>
<!-- Black background line -->
<div class="Bg-color"></div>

<!-- Main image section -->
<main class="Bg-color-2">

    <div class="Text">

    <h4 class="welcome">WELCOME</h4>
    <h4 class="online">YOUR ONLINE PLANTS NURSERY</h4>
    <p class="Household">Household plants not only enhance the overall appearance of a space but studies show they boost moods, increase creativity reduce stress and eliminate air pollutants-making for a healthier, happier you. Being able to see the greenery of plants around you has a calming effect, towering blood pressure and consequently making you feel more relaxed and ultimately, happier</p>
    <div class="button-1">
        <button class="button" id="demo" ><b><a href="aboutUs.php" class="info">MORE INFO</a></b></button>
        <button class="button" id="demo2" ><b><a href="contactus.php" class="info">CONTACT US</a></b></button>
    </div>

    </div>

    <div>
        <img src="assets/images/p5.jpg"  class="main-image" alt="">
    </div>

</main>


<!-- New section Cateogor -->
<section class="flex-property">
    <div class="border">
        <h5 class="plant-text">Plants</h5>
        <img src="assets/images/plant.png" class="plants-images" alt="">
        <p>
          Different kinds of plants are 
          available for different seasons.  
    </p>
      
        <a class="button2" href="plantList.php" class="info">View </a>
    </div>
    <div class="border">
        <h5 class="plant-text">Pots</h5>
        <img src="assets/images/pots.png" class="plants-images" alt="">
        <p> Different kinds of Pots are 
          available.  </p>
        <a class="button2" href="PotsList.php" class="info">View </a>

        </div>
    <div class="border">
        <h5 class="plant-text">Gardening Tools</h5>
        <img src="assets/images/tools.png" class="plants-images" alt="">
        <p> Different kinds of Tools are 
          available. </p>
        <a class="button2" href="tools.php" class="info">View </a>

     </div>
    
</section>
<form action="index.php">









<div class="center">
<h2> Our Best  Products</h3>

</div> 
<br><br><br><br><br><br>
<section class="flex-property">

<div class="border">
        <h5 class="plant-text">Intermittent Blossoms</h5>
        <img src="assets/images/pansy.png" class="plants-images" alt="">
           <p>
            Beautiful fast growing  Winter pansy Flower plant.
        </p>
        <p>
        Old Price <div class="c"> 300PKR
         </div>
        </p>
        <p>
          New Price 250PKR
        </p>
        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> 1000  <i class='far fa-heart' style='font-size:24px;color:red'></i> 800</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>  
    
    
    <div class="border">
        <h5 class="plant-text">Lettuce</h5>
        <img src="assets/images/lettcu.jpg" class="plants-images" alt="">
        <p>Looseleaf lettuce, romaine,<br>
         and butterhead lettuce can be grown year-round <br>
         in many climates..</p>
         <p>
        Old Price <div class="c"> 500PKR
         </div>
        </p>
        <p>
          New Price 450PKR
        </p>
        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> 800  <i class='far fa-heart' style='font-size:24px;color:red'></i> 700</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
    <div class="border">
        <h5 class="plant-text">Basil</h5>
        <img src="assets/images/Basil.jpg" class="plants-images" alt="">
        <p>Basil can be grown indoors or in pots on a windowsill year-round</p>
        <p>
        Old Price <div class="c"> 550PKR
         </div>
        </p>
        <p>
          New Price 480PKR
        </p>
        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> 700  <i class='far fa-heart' style='font-size:24px;color:red'></i> 600</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
</section>

<div class="center">
<h2> Flowers</h3>
</div> 
<br><br><br><br><br><br>
<section class="flex-property">

      
    <div class="border">
        <h5 class="plant-text">Pansy</h5>
        <img src="assets/images/pansy.png" class="plants-images" alt="">
        <p>
            Beautiful fast growing  Winter Flower plant.
        </p>
        <p>
        Old Price <div class="c"> 300PKR
         </div>
        </p>
        <p>
          New Price 250PKR
        </p>
        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> 500  <i class='far fa-heart' style='font-size:24px;color:red'></i> 200</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
    <div class="border">
        <h5 class="plant-text">Red Rose</h5>
        <img src="assets/images/rose.png" class="plants-images" alt="">
        <p>
          Beautiful red rose plant.
        </p>
        <p>
        Old Price <div class="c"> 200PKR
         </div>
        </p>
        <p>
          New Price 150PKR
        </p>
        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> 500  <i class='far fa-heart' style='font-size:24px;color:red'></i> 200</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
    <div class="border">
        <h5 class="plant-text">Lantana </h5>
        <img src="assets/images/lantana.png" class="plants-images" alt="">
        <p>
         Beautiful Summer flower plant
    </p>
    <p>
        Old Price <div class="c"> 200PKR
         </div>
        </p>
        <p>
          New Price 150PKR
        </p>
        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> 500  <i class='far fa-heart' style='font-size:24px;color:red'></i> 200</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
    
</section>

</div> 
<section>

<h2> Our Products</h3>
<?php
include 'config.php';



$query="SELECT p.`id`, p.`title`, p.`description`,p.photo, p.`purchasing_price`, p.`salling_old_price`, p.`selling_new_price`, SUM(r.`likes` * r.`stars`) AS product_likes_stars_product FROM `products` p JOIN `reviews` r ON p.`id` = r.`productid` GROUP BY p.`id`, p.`title`,p.photo, p.`description`, p.`purchasing_price`,p.`salling_old_price`,p.`selling_new_price` ORDER BY product_likes_stars_product DESC";

$result = $con->query($query);
if ($result && $result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {
  
  
  ?>
   
  
  
 

<br><br><br><br><br><br>
<section class="flex-property">

      
    <div class="border">
        <h5 class="plant-text"><?php echo $row['title'] ?></h5>
        <p><?php echo $row['description'] ?></p>
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>" width=50px height=50px />
        <p>New Price<?php echo $row['selling_new_price'] ?></p>
        
        <p>Old Price<div class="c"><?php echo $row['salling_old_price'] ?></div></p>
        
        <p><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?php echo $row['product_likes_stars_product'] ?>  <i class='far fa-heart' style='font-size:24px;color:red'></i> <?php echo $row['product_likes_stars_product'] ?></p>
        
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
  <?php  
}
}

?>
    
    
</section>



</form>
</body>
</html>