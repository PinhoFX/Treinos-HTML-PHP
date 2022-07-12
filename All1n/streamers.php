<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="CSS/Design.css">
    <link rel="stylesheet" href="CSS/navgator.css">
    <link rel="stylesheet" href="CSS/canais.css">
    <link rel="stylesheet" href="CSS/animacoes.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL1N E-SPORTS | STREAMERS</title>
</head>
<body>
<?php
    include_once('config.php');
    $sql="SELECT * FROM Streamer ORDER BY id DESC";
    $result=$conect->query($sql);
  

?>
<style>
  .leave{
    opacity: 1;
    float: right;
    text-align: center;
    padding: 10px 16px;
  }
  </style>

    <ul>
      <img class="imagem" src="img/logo.png" width="35PX" height="35px">
        <li><a href="INDEX.php">Home</a></li>
        <li><a class="active" href="">Streamers</a></li>
        <li><a href="offline.php">Teams</a></li>
        <li><a href="offline.php">About</a></li>
        <a href="Admistração/login.php" >
        <svg class="leave" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
        </a>
      </ul>

      <div class="color ">
        <div class="load is-animating">
        <img  class="CENTER tem load"src="img/logo.png" width="500PX" height="500px">
        </div>
      </div>


<div class="streamers" >

        <div class="color2">
          <h3 class="texto">ALL1N Streamers</h3>
          <div class="flex">
    
          
          <?php 
              while ($user_data = mysqli_fetch_assoc($result)) {
                  ECHO
                       "<div class=card>
                       <a href='Streamers/user.php?id=$user_data[id]'>
                         <img src=Imagens/Streamers/". $user_data['imagem'] ." alt=Avatar width=300px height=300px>
                       </a>  
                         <div class=container>
                           <h4><b>". $user_data['nome'] ."</b><br><img width=15 src=img/smalltw.png><font size=4>". $user_data['nomecanal'] ."</font></h4>
                         </div>
                     </div>";
             }
            ?>
        </div>
        <h5 class="textovermais"><a href="INDEX.php">Voltar!</a></h5>
        <hr color="blue">

        </div>
        
      </div>
      <div class="color3">
        
        <div class="flex">
          <div>
            <iframe src="https://discord.com/widget?id=874994965640519701&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
           
          </div>
          <div>
            <img  class="CENTER tem"src="img/logo.png" width="500PX" height="500px">
          </div>
        </div>
      </div>


</body>
</html>