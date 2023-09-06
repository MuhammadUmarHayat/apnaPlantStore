
<!-- php scritp  -->
<?php

session_start();

if ($_SESSION['username'] == null) 
{
    header('Location:'.'../logout.php');
} else {
    $username = $_SESSION['username'];
    echo "<h2> Welcome " . $username . "</h2>";
}

?>
<!-- php scritp  -->

<?php
include '../config.php';
$message = "";

if (isset($_POST['submit'])) {
    //register now	

    $data = $_POST;

    if (
        empty($data['title']) 

       

    ) {

        die('Please fill all required field!');
    }




    if (!empty($_FILES["image"]["name"]))
     {
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));


            $title = $_POST['title'];
            $type = "-";
            $category = $_POST['category'];
            $purchasing_price = $_POST['purchasing_price'];
            $salling_old_price = $_POST['salling_old_price'];
            $selling_new_price = $_POST['selling_new_price'];
            $quantity = $_POST['quantity'];
            $createdat = date("Y-m-d");
            $description=$_POST['description'];


            $date1 ="" ;
           $status ="" ;
            


//////////////////////////////////////////////////////////////////////////////////////////////////INSERT INTO `products`( `title`, `category`, `description`, `purchasing_price`, `salling_old_price`, `selling_new_price`, `qty`, `status`, `product_type`) VALUES ('','','','','','','','','','')
            $query = "INSERT INTO `products`( `title`, `category`, `description`, `purchasing_price`, `salling_old_price`, `selling_new_price`, `qty`, `status`, `product_type`, `photo`) VALUES ('$title','$category','$description','$purchasing_price','$salling_old_price','$selling_new_price','$quantity','$status','$type','$imgContent')";

            $insert = mysqli_query($con, $query);



            $message = "Record is added successfully";
        }
    }
}




?>



<!-- GUI  -->

<?php include("header.php")?>
<br><br>
<form method="post" action="newProducts.php" enctype="multipart/form-data">
                    <div class="center">
                    <h2> Add A New Product Here</h2>
                        <table>
                            <tr>
                                <td>Title </td>
                                <td><input type="text" name="title" required> <span class="error">*</span> </td>
                            </tr>
                            <tr>
                                <td>Description </td>
                                <td><input type="text" name="description" required> <span class="error">*</span> </td>
                            </tr>      
                            
                            <tr>
                                <td>Category </td>
                                <td>
    <select name="category">
    <option disabled selected>-- Select Plant Type--</option>
    <?php
	//mysqli_query($con,$q1);
    include '../config.php';  // Using database connection file here
        $records = mysqli_query($con, "SELECT title From `product_types`");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['title'] ."'>" .$data['title'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
 
                            </td>
                            </tr>
                            
                            <tr>
                                <td>Purchase Price </td>
                                <td><input type="number" name="purchasing_price" required> <span class="error">*</span> </td>
                            </tr>
                            <tr>
                                <td>Old Price </td>
                                <td><input type="number" name="salling_old_price" required> <span class="error">*</span> </td>
                            </tr>
                            
                            <tr>
                                <td>New Price </td>
                                <td><input type="number" name="selling_new_price" required> <span class="error">*</span> </td>
                            </tr>
                            
                            <tr>
                                <td> Quantity </td>
                                <td><input type="number" name="quantity" required> <span class="error">*</span> </td>
                            </tr>


                            <tr>
                                <td>
                                    <label>Select Image File:</label>
                                </td>
                                <td> <input type="file" name="image">
                                </td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td> <button class="button1" type="submit" name="submit"> Submit </button> </td>
                            </tr>
                        </table>
                        <?php
                        echo $message;
                        ?>
                    </div>
                </form>


</body>
</html>