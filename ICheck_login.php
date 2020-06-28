<html>
<head>
<!---<link rel="stylesheet" href= "estilo.css">-->
<title>ICheck</title>
<style> </style>
</head>

<body style= "font-family: sans-serif" >
<center> <h1>ICheck</h1>
<Img SRC ="images/ICheck.jpeg" alt = "iCheck Logo" width = "100px" height = "100px"/>
<p> <h3>LET'S SIGN IN</h3></p>

<form class="box"
action="loginvalidation.php"
method ="get">


		<INPUT TYPE="text" NAME="username"
			<?php
						if (isset($_GET['alert'])){
							echo 'placeholder = "User not match" ';
						} else {
							echo 'placeholder = "Username" ';
						}
			?>
		>

	<br></br>
	<INPUT TYPE="text" NAME="password"
				<?php
							if (isset($_GET['alert'])){
								echo 'placeholder = "Pass not match" ';
							} else {
								echo 'placeholder = "Password" ';
							}
				?>

	>

	<br/>
	<br> <INPUT TYPE="submit" VALUE="sign in" NAME="SubmitButton"></br>
</form>

</center>

<div>
<center>
<p></p>
Join ICheck, let's create an account
<br/>
<br> <INPUT TYPE="submit" VALUE="create account"></br>

<p></p>
Did you forget your password?
<INPUT TYPE="submit" VALUE="CLICK HERE">
</center> </div>

</body>
</html>
