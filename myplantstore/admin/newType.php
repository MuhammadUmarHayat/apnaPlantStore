
<!-- php scritp  -->

<!-- php scritp  -->

<?php
include '../config.php';
$message = "";

if (isset($_POST['submit'])) {
    //register now	

    


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
            $description = $_POST['description'];
           
            



            $query = "INSERT INTO `product_types`( `title`,`description`, `photo`) VALUES (' $title','$description','$imgContent')";

            $insert = mysqli_query($con, $query);



            $message = "Record is added successfully";
        }
    }
}




?>



<!-- GUI  -->


<?php include("header.php")?>
<br><br><br>

<form method="post" action="newType.php" enctype="multipart/form-data">
    
                    <div class="center">
                    <h2> Add A New Type Here</h2>
                    <br><br><br>
                        <table>

                            <tr>
                                <td>Title </td>
                                <td><input type="text" name="title" required> <span class="error">*</span> </td>
                            </tr>
                            

                            <tr>
                                <td>Short description </td>
                                <td><input type="text" name="description" required> <span class="error">*</span> </td>
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