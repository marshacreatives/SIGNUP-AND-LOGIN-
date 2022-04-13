<!DOCTYPE html>
<html>
	<head>
	<title>log-in | home</title>
	</head>
<body style="background-image:url(images/back.jpg)" padding="25%">
<link rel="stylesheet" href="main.css">
			<div class="header">
				<ul>
					<li><a href="cover.php" class="logo"><img src="images/logo.png" width="10%" height="10%"  > <a></li>
					<div class="float" style="float:right;font-size:20px">
					<li><a href="locateus.php">Locate Us</a></li>
					<li><a href="cover.php">Home</a></li>
					</div>
				</ul>
			</div>
			<div class="center" style="text-align:center;font-size:50px;color:orangered">
				<h1>log in</h1><br>
				<p style="text-align:center;color:white;font-size:30px;top:35%"></p><br>
				<button onclick="document.getElementById('id01').style.display='block'" style="position:absolute;top:55%;left:45%">Login</button>
				
			</div>	
			<div class="footer">
				<ul style="position:absolute;top:93%;background-color:black">
				
					<li><a href="signup.php">sign-up</a></li>
				</ul>
			</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="cover.php">
    <div class="imgcontainer">
		<span style="float:left"><h2>&nbsp&nbsp&nbsp&nbspLog In</h2></span>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
	
	
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
		<button type="submit" name="login">Login</button>
		

      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'" style="float:right">Don't have one?</button>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="signup.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span><br>
    </div>

	
	
    <div class="container">
		<p style="text-align:center;font-size:18px;"><b>Sign Up -> </b></p>
      <p style="text-align:center"><b>Choose your Dates -></b></p>
      <p style="text-align:center"><b> Book your visit</b></p>
	  
    </div>
	
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
	  <button type="submit" name="signup" style="float:right">Sign Up</button>
    </div>
	
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>
<?php
session_start();
$error=''; 
if (isset($_POST['login'])) {
if (empty($_POST['uname']) || empty($_POST['psw'])) {
$error = "Username or Password is invalid";
}
else
{
	include 'dbconfig.php';
	$username=$_POST['uname'];
	$password=$_POST['psw'];

	$query = mysqli_query($conn,"select * from users where password='$password' AND username='$username'");
	$rows = mysqli_fetch_assoc($query);
	$num=mysqli_num_rows($query);
	if ($num == 1) {
		$_SESSION['username']=$rows['username'];
		$_SESSION['user']=$rows['name'];
		header( "Refresh:1; url=home.php"); 
	} 
	else 
	{
		$error = "Username or Password is invalid";
	}
	mysqli_close($conn); 
}
}
?>
</body>
</html>
