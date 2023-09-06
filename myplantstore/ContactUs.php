<?php
include 'config.php';
$message = "";

if (isset($_POST['submit'])) 
{
   
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $msgdat = date("Y-m-d");

 $query="INSERT INTO `contactus`( `name`, `email`, `message`, `messageDate`) VALUES ('$name','$email','$message','$msgdat')";
$insert = mysqli_query($con, $query);



            $message = "Record is added successfully";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">
</head>
<body>
<?php  include("header.php")?>
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
    <header>
        <h1>Contact Us</h1>
    </header>

    <main>
        <p>If you have any questions or feedback, feel free to get in touch with us using the form below:</p>

        <form action="ContactUs.php" method="post">
            <table>
           <tr>    
            <td> <label for="name">Name:</label></td>
            <td> <input type="text" id="name" name="name" required></td></tr>
            <tr> 
            <td>  <label for="email">Email:</label></td>
            <td>  <input type="email" id="email" name="email" required></td></tr>
            <tr> 
            <td> <label for="message">Message:</label></td>
            <td> <textarea id="message" name="message" rows="4" required></textarea></td></tr>
            <tr> 
            <td> </td>  <td><input class="button2" type="submit" name ="submit" value="Submit"> </td></tr> 
         </table>
        </form>
    </main>
    <?php
                        echo $message;
                        ?>
    <footer>
        <p>Contact Information: Phone: (123) 456-7890 | Email: info@example.com</p>
    </footer>
</body>
</html>
