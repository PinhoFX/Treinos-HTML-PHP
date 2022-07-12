

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FENIX</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Register </h2>
    <!-- Icon -->
    <div class="fadeIn first">
    </div>
    <!-- Login Form -->
    <form action="registerbase.php" method="POST" enctype="multipart/form-data">
      <input type="text" class="fadeIn second" name="nome" placeholder="nome">
      <input type="password" class="fadeIn third" name="pass" placeholder="password">
      <input type="file" class="fadeIn third" name="imagem" placeholder="imagem">
      <input type="submit" name="submit" value="registar">
    </form>

  </div>
</div>
</body>
</html>