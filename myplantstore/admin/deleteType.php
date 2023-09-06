<!-- PHP  -->
<?php include '../config.php';
 
$id= $_GET['id'];//query string 
$statusMsg ="";

$insert = $con->query("DELETE FROM `product_types` WHERE `id`='$id'"); 
             if($insert){ 
               
                 $statusMsg = "Record is deleted successfully."; 
            }else{ 
                $statusMsg = "Failed, please try again."; 
            }  

?>

<!-- GUI  -->

<?php include("header.php")?>
<br><br><br>
<div class ="center">
    <?php echo $statusMsg;?>
        </div>