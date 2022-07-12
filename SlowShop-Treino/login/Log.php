<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="log.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup" action="register.php">
				<form>
					<label class="inp" for="chk" aria-hidden="true">Sign up</label>
					<input class="inp" type="text" name="txt" placeholder="User name" required="">
					<input class="inp" type="email" name="email" placeholder="Email" required="">
					<input class="inp" type="password" name="pswd" placeholder="Password" required="">
					<input type="submit" name="submit" value="registar">
				</form>
			</div>

			<div class="login" action="login.php">
				<form>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<input type="submit" name="submit" value="Login">
				</form>
			</div>
	</div>
</body>
</html>