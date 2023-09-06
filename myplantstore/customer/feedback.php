<?php include '../config.php';

session_start();
    $customerID="";

$customerID=$_SESSION["username"] ;
if (isset($_POST['submit'])) 
{

  echo  $pid = $_POST['pid'];
  echo "<br>";
    $likes=$_POST['likes'];
    $starss=$_POST['likes'];
    $dates=date("d/m/y");
$message=$_POST['message'];
  echo  $query="INSERT INTO `reviews`(`customerid`, `message`, `createdat`, `likes`, `stars`, `productid`) VALUES ('$customerID','$message','$dates','$likes','$starss','$pid')";
echo "Thank you for your feedback";
}

include "header.php"?>
<br>
<br>
<center>
    <form action="feedback.php" method="post">
<table>
<tr><td>Customer Name</td><td><?php echo $customerID ?></td></tr>
<tr><td>Product Name</td>
<td>
<select name="pid">
    
    <?php
	//mysqli_query($con,$q1);
    include '../config.php';  // Using database connection file here
        $records = mysqli_query($con, "SELECT `title` From `products`");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['id'] ."'>" .$data['title'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
 
</td></tr>
<tr><td>Do you like this Application</td>
<td><select name="likes">
<option disabled selected>-- Select  --</option>  
<option value='1'>yes</option>  
<option value='0'>no</option> 
</select>
</td></tr>
<tr><td>Your Message</td>
<td> 
<textarea id="message" name="message" rows="4" cols="50">

</textarea>

</td></tr>
<tr><td>
<button class="button1" type="submit" name="submit"> Submit </button>
</td><td></td></tr>
</table>
    </center>
    </form>