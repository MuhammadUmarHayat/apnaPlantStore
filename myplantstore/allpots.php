
<?php include 'config.php';

// Get image data from database 
$result = $con->query("SELECT * FROM `products` WHERE `category`='Pots'");

include("header.php");?>
<style>
     .button1{
    background-color: #4CAF50; /* Green */
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
    background-color: #008CBA; /* Blue */
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
  
 <br><br><br><br><div class="center">
<h2> List of Pots</h3>

</div><br><br><br><br><br>
 <section class="flex-property">

 <?php  if ($result && $result->num_rows > 0) 
{
     while ($row = $result->fetch_assoc())
      {
    ?>
    
    <div class="border1">
        
        

        <h5 class="plant-text"><?php echo $row['title'] ?></h5>
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>" width=20% />
        <p class="price">
          <div class="c">
          <?php echo $row['salling_old_price'] ?>
      </div>
        </p>
  <p class="price"><?php echo $row['selling_new_price'] ?></p>
 <p> <h4><?php echo $row['description'] ?></h4></p>
  <p><a class="button1" href="#" class="info">Add to Cart</a></p>

  </div>
     
    <?php



} ?>

<?php } ?>

    </section>  


