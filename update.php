<?php include('php-sql\db3.php'); ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="login.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<title>Change password</title>
</head>

<body>
		<form method="post" action="update.php">
		

		<fieldset style="width:400px; background-color: #FFFFF0; opacity:0.9 ;border-width:1px; border-color: #483D8B; border-radius: 12px; margin-left:550px; margin-top: 200px;" > <legend style="color: white; font-family:Lucida Handwriting; text-shadow: 3px 2px #483D8B;"></legend>
			<?php include('php-sql\errors.php'); ?>
			<h2 style="color:#483D8B;">Change password</h2>
		<div class="input-icons">
		
		<i class="s"></i> 
		<input class="input-field " type="email" name="email" placeholder="Email" id="email" value="<?php echo $email ?>"></br>

		<i class="fa fa-key icon" aria-hidden="true"></i>
		<input class="input-field " type="password" name="Password" id="Password" placeholder="New password"></br>

		<i class="fa fa-key icon" aria-hidden="true"></i>
		<input class="input-field " type="password" name="Password1" id="Password1" placeholder="Confirm new password"></br>

	</div>
		<button type="submit" id="Change" name="Change" style=" font-weight: bolder;">Change</button></br></br>
		<a style=" font-weight: bold; text-decoration: none; color: #483D8B" href="Homepage.php"> Go back </a> 
	</fieldset>
	</form>


</body>
<br>
<br>
<br>
<br>
<br>
<br>
<footer>
	<table align="right" width="80%" cellspacing="10px">
		<tr>
			<div class="link">
			<td ><a style="text-decoration: none; padding: 10px; color: #808080;" href="#">ABOUT</a></td>
			<td><a style="text-decoration: none; padding: 10px; color: #808080;" href="#">HELP</a></td>
			<td><a style="text-decoration: none; padding: 10px; color: #808080;" href="#">PRIVACY</a></td>
			<td><a style="text-decoration: none; padding: 10px; color: #808080;" href="#">LOCATIONS</a></td>
			<td><a style="text-decoration: none; padding: 10px; color: #808080;" href="#">LANGUAGE</a></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td style="color:"#DCDCDC" ">&#9400; ABCLearn 2020</td>

		</tr>
	</table>
</footer>
<script type="text/javascript">
var currentTime = new Date().getHours();
if (7 <= currentTime && currentTime < 20) {
    if (document.body) {
        document.body.style.backgroundImage = "url('img/images.jpg')";
    }
}
else {
    if (document.body) {
        document.body.style.background = "url('img/images.jpg')";
    }
}

</script>
</html>
