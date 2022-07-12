
<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="../CSS/Design.css">
    <link rel="stylesheet" href="../CSS/navgator.css">
    <link rel="stylesheet" href="../CSS/canais.css">
    <link rel="stylesheet" href="../CSS/animacoes.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL1N E-SPORTS | ADM-Streamers</title>
</head>
<body bgcolor="white">

<style>
 
input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 25%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder {
  color: #cccccc;
}


button {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

button:active:after {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
  background-color: #39ace7;
}
.leave{
    opacity: 1;
    float: right;
    text-align: center;
    padding: 10px 16px;
  }
</style>
<?php
    include_once('../config.php');
    $sql="SELECT * FROM Streamer ORDER BY id DESC";
    $result=$conect->query($sql);
?>

    <ul>
      <img class="imagem" src="../img/logo.png" width="35PX" height="35px">
      <li><a href="adm.php">Home-ADM</a></li>
        <li><a href="Streamers.php">Streamers</a></li>
        <li><a href="Staff.php">Staff</a></li>
        <li><a href="torneios.php">Torneios</a></li>
        <a href="../index.php" >
        <svg class="leave" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-house-door" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
        </svg></a>
    </ul>
    <style>
.flex0{
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  align-items:center;
  justify-content: center;
  gap: 20px;
  padding-bottom: 50px;
}
    div.la{
    padding: 200px;
    background-size: cover;
    background-image: url("../img/walpapperpreto.jpg");
    background-repeat: no-repeat;
}
    div.la2{
        padding: 50px;
        padding-bottom: -50px;
        background-size: cover;
        background-image: url("../img/walpapperpreto.jpg");
        background-repeat: no-repeat;
    }
    </style>
      <div class="la">
      <center> <h2><font color="white">Staff Painel</font></h2></center>
        <div class="load is-animating">
         <img  class="CENTER tem load"src="../img/logo.png" width="400PX" height="400px">
        </div>
      </div>
    <center>

  <div class="bg">  
  <h1> Torneios</h1>
    <form action="../torneios/addstr.php" method="POST" enctype="multipart/form-data">
      <input type="text" name="nome" placeholder="nome" value="ALL1N ESPORTS"><br>
      <input type="text" name="deles" placeholder="Equipa contra"> <input type="file" name="imagem" placeholder="Imagem" src=""><br>
      <input type="text" name="nos" placeholder="Nósso Resultado"> 
      <input type="text" name="eles" placeholder="Resultado Deles"><bR>
      <input type="submit" name="submit" id="submit" value="submit">
    </form>
    
<div class="la2">
    <div class="flex">
    <?php 
            include_once('../config.php');
            $sql="SELECT * FROM torneios ORDER BY id DESC";
            $result=$conect->query($sql);
              while ($user_data = mysqli_fetch_assoc($result)) {
                  ECHO
                       "<div class='flex0 f-s'>
                        <div>  
                          <img src='../imagens/torneios/".$user_data['n1']."' height='200'>
                        </div> 
                       <div>
                         <h4 class='texto'>Results<br>".$user_data['nos']." - ".$user_data['eles']."</h4>  
                       </div>
                       <div>  
                        <img src='../imagens/torneios/".$user_data['n2']."' height='200'>
                       </div> 
                       <a class='btn btn-sm btn-primary' href='../torneios/delete.php?id=$user_data[id]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='60' height='60' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 15 15'>
                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                        </svg></a>
                      </div>
                      </div>
                       ";
             }
            ?>
</body>
</html>

