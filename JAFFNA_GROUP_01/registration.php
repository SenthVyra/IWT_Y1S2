

    <?php
if(isset($_POST['sub']))
{
  echo "hi";
$userid=$_POST['user_id'];
$pswrd=$_POST['user_pswrd'];
$name1=$_POST['user_name1'];
$name2=$_POST['user_name2'];
$phone=$_POST['user_phone'];
$add=$_POST['user_add'];
$con=new mysqli("localhost","root","","iwtproj");
$sql="insert into user_details(user_id,password,first_name,last_name,phone,address) values('$userid','$pswrd','$name1,'$name2',$phone,'$add')";

 

$con->query($sql);
$con->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <img align = "left" src="images/22.jpg" alt="logo" width="362" height="294">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style01.css">
<body>
  
<div class="header">
  <h1>I N F O T R V E L</h1>
  <p><b>life is live</b></p>
</div>

<div class="navbar">
  <a href="home.php">HOME</a>
  <a href="login.php">LOGIN</a>
  <a href="registration.php">REGISTRATION</a>
  <a href="profile.php">PROFILE</a>
  <a href="about.html">ABOUT</a>
  
</div>
<div class="row">
  <div class="side">
    <h2>Tourism</h2>
    <div style="height:200px;"><img src="images/23.jpg" alt="img" width="280" height="160"></div>
    <p>Tourism is travel for pleasure or business; also the theory and practice of touring, the business of attracting, accommodating, and entertaining tourists, and the business of operating tours..</p>
    <IMG SRC="IMAGES/25.jpg" height="100" width="325" >
    <img src="images/29.jpg" height="100" width="325">
    <img src="images/31" height="100" width="325">
  </div>
  <div class="main">

   <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table>
    <tr><td> User ID </td><td><input type="text" name="user_id"></td></tr>
    <tr><td> Password </td><td><input type="password" name="user_pswrd"></td></tr>
    <tr><td> First Name </td><td><input type="text" name="user_name1"></td></tr>
    <tr><td> Last Name </td><td><input type="text" name="user_name2"></td></tr>
    <tr><td> Phone Number</td><td><input type="text" name="user_phone"></td></tr>
    <tr><td> Address</td><td><textarea name="user_add"></textarea></td></tr>
    <tr><td></td><input type="submit" name="sub" value="register"></td></tr>
</table>
   </form>
</div>

<div class="footer">
  <h2>FOLLOW US</h2>
  <div padding: 14px 16px>
  <a href="https://www.facebook.com/"><img src="images/19" height="50" width="50"></a>
  <a href="https://www.twitter.com/"><img src="images/20" height="50" width="50"></a>
  <a href="https://www.instagram.com/"><img src="images/27.png" height="50" width="50"></a>
  <img src="images/34.png" height="50"  width="50">
</div>

</body>
</html>
