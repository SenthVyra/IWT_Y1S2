<?php
$user=$_POST['user'];
$pass=$_POST['psw'];
$con=new mysqli("localhost","root","","iwtjune2020");

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

 


?>
<html>
<head>
<link rel="stylesheet" href="css/top_styles.css">
<link rel="stylesheet" href="css/profile_styles.css">
</head>

<body>
<!-- Header will be here -->
<div class="header_logo">
Header
</div>

<div class="profile_para">
This is the Profile Page
</div>
</body>
</html>