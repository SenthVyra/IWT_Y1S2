<!DOCTYPE html>
<html lang="en">
<head>
    <img align = "left" src="images/22.jpg" alt="logo" width="362" height="294">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style01.css">


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
<body>

  <div class="main">
  <?php
$user=$_POST['usr'];
$pass=$_POST['psw'];
$con=new mysqli("localhost","root","","iwtproj");



$sql="select * from user_details where username='$user'";
$result=$con->query($sql);
$raw=$result->fetch_assoc();
if($pass==$raw['password'])
{
}
else
{
header("Location:login.php");
}
<form method="post" action="updateshopping.php">
<input type="hidden" name="u" value="<?php echo $user;?>">
<input type="submit" name="sub" value="Update Shopping">
</form>
<form method="post" action="searchpakage.php">
<input type="hidden" name="u" value="<?php echo $user;?>">
<input type="submit" name="sub" value="search package">
</form>

?>
 </div>
    

<div class="footer">
  <h2>FOLLOW US</h2>
  <div>
  <a href="https://www.facebook.com/"><img src="images/19" height="50" width="50"></a>
  <a href="https://www.twitter.com/"><img src="images/20" height="50" width="50"></a>
  <a href="https://www.instagram.com/"><img src="images/27.png" height="50" width="50"></a>
  <img src="images/34.png" height="50"  width="50">
</div>

</body>
</html>
