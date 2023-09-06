<!-- PHP  -->
<?php  include '../config.php';
 
$id= $_GET['id'];//query string 
$statusMsg ="";

$insert = $con->query("DELETE FROM `carts` WHERE `id`='$id'"); 
             if($insert)
             { 
               
                 $statusMsg = "Record is deleted successfully."; 
                 header('Location:'.'viewCart.php');
            }
            else
            { 
                $statusMsg = "Failed, please try again."; 
            }  

?>


<?php include("header.php")?>
<br><br><br>
<div class ="center">
    <?php echo $statusMsg;?>
        </div>