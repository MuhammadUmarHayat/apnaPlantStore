<?php include '../config.php';
 
if(isset($_POST["submit"]))
{





$id= $_GET['id'];
		
$title= $_POST['title'];

$description= $_POST['description'];
		
		
	$sql="UPDATE `product_types` SET `title`='$title',`description`='$description' where  `id`='$id'";
		
		
		
		
		
	
	$insert = $con->query($sql); 
             if($insert){ 
                $status = 'success'; 
                echo $statusMsg = "Record is updates successfully."; 
            }else{ 
               echo $statusMsg = "Failed, please try again."; 
            }  
	
	
	
	
}


$id= $_GET['id'];
$title="";
$description="";
$result = $con->query("SELECT * FROM `product_types` where  `id`='$id'"); 
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
			
     //   `description`
			
			
	


     
		
	    $title= $row['title'];
       $description=$row['description'];
		
		// $fullname,$userid,	 $address, $mobile, $phone
		
		
}
}




?>
 
<?php include("header.php")?>
<br><br><br><br>
<center>
<h1>
Edit Type Details!
</h1>
<br><br><br>
<form action="editType.php?id=<?php echo $id; ?>" method="post">
<table>


<tr><td>Category ID</td><td><?php echo $id; ?></td></tr>
<tr><td>Title</td><td><input type="Text" name="title" value="<?php echo $title; ?>"></td></tr>
<tr><td>Description</td><td><input type="Text" name="description" value="<?php echo $description; ?>"></td></tr>


</td></tr>
<tr><td></td><td><input class="button1" type="submit" name="submit" value="Save Changes"></td></tr>


</table>
</form>
</center>
