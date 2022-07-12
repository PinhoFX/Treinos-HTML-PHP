

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>FENIX</title>
  
</head>

<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <!-- Icon -->
    <div class="fadeIn first">
    </div>
    <!-- Login Form -->
    <form action="loginbase.php" method="POST">
      <input type="text" class="fadeIn second" name="nome" placeholder="nome">
      <input type="password" class="fadeIn third" name="pass" placeholder="password">
      <input type="submit" name="submit" class="fadeIn fourth" value="Connectar">
      <a href="register.php">Se não tiver registado clique aqui</a>
    </form>

  </div>
</div>
</body>
</html>