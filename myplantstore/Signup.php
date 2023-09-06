

<?php
include 'config.php';

if(isset($_POST['submit']))
{

$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];


$mobile=$_POST['mobile'];
$phone=$_POST['phone'];
$usertype="customer";
 $status="active";
 $doe=date("d-m-y");
echo $query="INSERT INTO `users`(`name`, `username`, `password`, `address`, `mobile`, `phone`, `usertype`, `status`, `doe`) VALUES ('$fullname','$username','$password','$address','$mobile','$phone','$usertype','$status','$doe')";
echo $query = mysqli_query($con,$query);

echo"You are registered successfully";

}


?>


    
<?php include("header.php")?>
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

<form method="post" action="Signup.php">
<br><br><br>
    <div class="center">
        <h3>Customer Registration Form</h3>
        <hr>
        <br>

<table>
    <tr>
        <td> Enter your complete name  </td>
        <td><input type="text" name="fullname" Required/> </td>
        <td>*</td>
         </tr>

         <tr>
        <td>Enter your User Name  </td>
        <td><input type="text" name="username" Required/> </td>
        <td>*</td>
         </tr>
         <tr>
        <td>Enter your Password </td>
        <td><input type="password" name="password" Required/> </td>
        <td>*</td>
         </tr>

         <tr>
        <td>Enter your Address </td>
        <td><input type="text" name="address" Required/> </td>
        <td>*</td>
         </tr>
         <tr>
        <td> Enter your Mobile Number </td>
        <td><input type="text" name="mobile" Required/> </td>
        <td>*</td>
         </tr>
         <tr>
        <td> Enter your Phone Number </td>
        <td><input type="text" name="phone" Required/> </td>
        <td>*</td>
         </tr>
         <tr>
        <td> </td>
        <td><input class="button2" type="submit" name="submit" value="SignUp"/> </td>
        <td></td>
         </tr>
</table>


</form>

    
</body>
</html>