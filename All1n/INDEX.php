<?php
    include_once('config.php');
    $quant=3;
    $sql="SELECT * FROM Streamer LIMIT 0, $quant";
    $result=$conect->query($sql);

    $sql1="SELECT * FROM Staff LIMIT 0, $quant";
    $result1=$conect->query($sql1);
  
    
?>
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
    <title>ALL1N E-SPORTS | HOME</title>
</head>
<body>

<style>
div.la{
    padding: 200px;
    background-size: cover;
    background-image: linear-gradient(black, transparent, black), url("img/csgo.jpg");
    background-repeat: no-repeat;
}
.flex2{
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  align-items:center;
  justify-content: center;
  gap: 20px;
  padding-bottom: 50px;
}
.leave{
    opacity: 1;
    float: right;
    text-align: center;
    padding: 10px 16px;
  }
</style>
  
    <ul>
      <img class="imagem" src="img/logo.png" width="35PX" height="35px">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="streamers.php">Streamers</a></li>
        <li><a href="offline.php">Teams</a></li>
        <li><a href="offline.php">About</a></li>
        <a href="Admistração/login.php" >
        <svg class="leave" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
        </a>

      </ul>

      <div class="la">
        <div class="load is-animating">
        <img  class="CENTER tem load"src="img/logo.png" width="500PX" height="500px">
        </div>

       <h3 class="texto">ALL1N E-SPORTS TEAM</h3>
       <br>
        <h2 class="texto">Torneios</h3>
        
        <?php 
            include_once('config.php');
            $sql="SELECT * FROM torneios ORDER BY id DESC";
            $result2=$conect->query($sql);
              while ($user_data = mysqli_fetch_assoc($result2)) {
                  ECHO
                       "<div class='flex2 f-s'>
                         <div>  
                           <img  src='imagens/torneios/".$user_data['n1']."' height='200'>
                         </div> 
                        <div>
                           <h4 class='texto'>Results<br>".$user_data['nos']." - ".$user_data['eles']."</h4>  
                        </div>
                        <div>  
                          <img  src='imagens/torneios/".$user_data['n2']."' height='200'>
                        </div></div>";
             }
            ?>
            
      </div>

      
</div>

                  <!-- PESSOAS -->
<style>
  div.bg1{
    background-color: white;
    background-repeat: no-repeat;
}
div.bg2{
    background-color: black;
    background-repeat: no-repeat;
    padding: 50PX;
    padding-bottom: 80px;
}
</style>        

<div class="bg2">
 <h3 class="texto ">Quem somos??</h3>

<div class="margin">
  <font size="5px" color="white" text-align="middle" >
    Nós ALL1N eSports somos uma organização portuguesa criada a julho de 2021.
    A nossa comunidade começou com uma equipa dedicada somente ao Counter-Strike Global Offensive (csgo), mas ao longo do tempo a nossa comunidade
    vindo a expandir as equipas, adicionando as equipas de, Rocket League, Apex, LoL e muitos mais
    Temos como principal objetivo subir nas ligas competitivas de diferentes jogos e fazer evoluir novos players com vontade para o mundo competitivo.
    Atualmente encontramo-nos em fase de recrutamento.


  </font>
</div>
</div>


<div class="bg1">
  

                  <h2>FOUNDERS</h2>
<div class="flex f-s ">

<?php 
              while ($user_data = mysqli_fetch_assoc($result1)) {
                  ECHO
                       "<div class=card>
                         <img src=Imagens/CEO/". $user_data['imagem'] ." alt=Avatar width=300px height=300px>
                       </a>  
                         <div class=container>
                           <h4><b>". $user_data['nome'] ."</b><br><font size=4>". $user_data['cargo'] ."</font></h4>
                         </div>
                     </div>";
             }
            ?>

</div>
 <!-- Proximo -->
  <a name="streamers"></a>
  <div class="streamers" >

    <div class="color2">
      <h3 class="texto">ALL1N Streamers</h3>
      <div class="flex f-s2">
      <?php 
              while ($user_data = mysqli_fetch_assoc($result)) {
                  ECHO
                       "<div class=card>
                       <a href=Streamers/user.php?id=$user_data[id]>
                         <img src=Imagens/Streamers/". $user_data['imagem'] ." alt=Avatar width=300px height=300px>
                       </a>  
                         <div class=container>
                           <h4><b>". $user_data['nome'] ."</b><br><img width=15 src=img/smalltw.png><font size=4>". $user_data['nomecanal'] ."</font></h4>
                         </div>
                     </div>";
             }
            ?>
        
      </div>
    <h5 class="textovermais"><a href="Streamers.php">Ver mais!</a></h5>
    </div>
  </div>


                   <!-- PESSOAS -->

                   <h2>Noticias</h2>
                   <div class="flex">
                    
                    <div >
                      <img  src="Imagens/Noticias/noticia1.png" height="400px">
                    </div>
                    <div class="opacity: 0.7;">
                      <img src="Imagens/Noticias/Noticia2.png" height="400px">
                    </div>
                    <div>
                      <img src="Imagens/Noticias/noticia3.png" height="400px">
                    </div>

                  </div>
                  


<!-- FUNDOOOOOOOOOOOOOOOO -->

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

