
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


  <div class="main">

  <?php



$con=new mysqli("localhost","root","","iwtproj");
$result=$con->query("select * from package_details");
while($raw=$result->fetch_assoc())
{
echo "<h1 id='title'>".$raw['package_name']."</h1>";
echo "<table>";
echo "<tr><td>Package_name</td><td>".$raw['package_name']."</td></tr>";
echo "<tr><td>amount</td><td>".$raw['amount']."</td></tr>";
echo "<tr><td>place</td><td>".$raw['place']."</td></tr>";
echo "<tr><td>description</td><td>".$raw['description']."</td></tr>";
echo "<tr><td>extra_service</td><td>".$raw['extra_service']."</td></tr>";
echo "</table>";
}
?>


 

<div class="footer">
  <h2>FOLLOW US</h2>
  
  <a href="https://www.facebook.com/"><img src="images/19" height="50" width="50"></a>
  <a href="https://www.twitter.com/"><img src="images/20" height="50" width="50"></a>
  <a href="https://www.instagram.com/"><img src="images/27.png" height="50" width="50"></a>
  <img src="images/34.png" height="50"  width="50">
</div>

</body>
</html>