<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $userType=$_POST['userType'];
$username=$_POST['username'];
$password=$_POST['password'];

if($userType=="admin")
{

    $result = $con->query("SELECT * FROM `admins` WHERE `username`='$username' and `password`='$password'");

    if ($result->num_rows > 0)
    {
        //id password is correct
        session_start();// start the session
        $_SESSION['username'] = $username;
        header('Location:'.'admin/index.php');
    }
    else
    {
        echo "Please enter correct userid and password";
    }

}
else if ($userType=="customer")
{
    $result = $con->query("SELECT * FROM `users` WHERE `username`='$username' and `password`='$password'");

    if ($result->num_rows > 0)
    {
        //id password is correct
        session_start();// start the session
        $_SESSION['username'] = $username;
        header('Location:'.'customer/index.php');

    }
    else
    {
        echo "Please enter correct userid and password";
    }
}
else
{
echo "Please enter correct userid and password";
}
}
?>


    <div>
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

<form action="login.php" method="post">
<br><br><br>
    <div class="center">
        
    <h2>Login </h2>
<table>
    <tr><td>Select User Type</td>

    <td>
    <select name="userType" id="userType">
  <option value="admin">Admin</option>
  <option value="customer">Customer</option>
  
</select>
</td>
    <td>*</td>
</tr>
    <tr><td>Enter user name</td>
    <td><input type="text" name="username" Required/></td><td></td>
</tr>
    <tr><td>Enter user password</td>
    <td><input type="password" name="password" Required/></td><td>*</td></tr>
    <tr><td></td>
    <td><input class="button2" type="submit" name="submit" class="info" value="Login"/></td><td></td>
</tr>
<tr><td></td>
    <td><a style="color:green;" href="signup.php"> New User register now!</a></td><td></td></tr>
</table>
</form>
</div>
</body>
</html>