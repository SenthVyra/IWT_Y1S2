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
$conn=new mysqli("localhost","root","","iwtproj");
$result=$conn->query("select * from order_details where user_id='$user'");
echo "<table>";



while($raw=$result->fetch_assoc())
{ $pid=$raw['package_id'];
$result2=$conn->query("select * from package_details where package_id=$pid");
$raw2=$result2->fetch_assoc();
echo "<tr><td>".$raw['package_id']."</td><td>".$raw2['package_name']."</td></tr>";

}
echo "</table>";
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
