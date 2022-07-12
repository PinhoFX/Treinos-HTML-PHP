<?php
     if(!empty($_GET['id']))
     {
      include_once('../config.php');

      $id=$_GET['id'];

      $sqlselect="SELECT * FROM Streamer WHERE id=$id";
      $result=$conect->query($sqlselect);
      if ($result->num_rows>0)
      {
        while ($user_data=mysqli_fetch_assoc($result)) 
        {
          $nome1 = $user_data['nome'];
          $nomecanal1 = $user_data['nomecanal'];
          $twitch1 = $user_data['twitch'];
          $imagem1 = $user_data['imagem'];
          
        }
      }
        else
        {
        header('Location: editstr.php');
        }
     
    }

    ?>

    <style>
  .flex2{
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  align-items:center;
  justify-content: center;
  gap: 20px;
  padding-bottom: 50px;
}
div.la{
    padding: 50px;
    padding-bottom:100px;
    background-size: cover;
    background-image: url("../img/walpapperpreto.jpg");
    background-repeat: no-repeat;
}
      </style>
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
    <title>ALL1N E-SPORTS | HOME</title>
</head>
<body>
    <ul>
      <img class="imagem" src="../img/logo.png" width="35PX" height="35px">
        <li><a href="../INDEX.php">Home</a></li>
        <li><a class="active" href="">Streamers</a></li>
        <li><a href="../offline.php">Teams</a></li>
        <li><a href="../offline.php">About</a></li>
      </ul>
      <div class="la">
<?php 

            if(!empty($_GET['id']))
            {
            include_once('../config.php');

            $id=$_GET['id'];
            $sqlselect="SELECT * FROM Streamer WHERE id=$id";
            $result=$conect->query($sqlselect);
            
            while ($user_data = mysqli_fetch_assoc($result)) 
            {
                ECHO"
                <h1 class='texto'>LiveStream - ". $user_data['nome']."</h1>
                <div class='flex2'>   
                <div class=card>
                       <a href='https://www.twitch.tv/" . $user_data['twitch']."'>
                         <img src=../Imagens/Streamers/". $user_data['imagem'] ." alt=Avatar width=300px height=300px>
                       </a>  
                         <div class=container>
                           <h4><b>". $user_data['nome'] ."</b><br><img width=15 src=  ../img/smalltw.png><font size=4>". $user_data['nomecanal'] ."</font></h4>
                         </div>
                     </div>
                     <div class=card>
                        <div id='twitch-embed'></div>
                        <script src='https://embed.twitch.tv/embed/v1.js'></script>
  
                        <!-- Create a Twitch.Embed object that will render within the 'twitch-embed' element. -->
                        <script type='text/javascript'>
                          var embed = new Twitch.Embed('twitch-embed', 
                          {
                            width: 800,
                            height: 480,
                            channel: '".$user_data['twitch']."',
                            layout: 'video',
                            autoplay: false,
                            // Only needed if this page is going to be embedded on other websites
                            parent: ['embed.example.com", "othersite.example.com']
                          });
                          embed.addEventListener(Twitch.Embed.VIDEO_READY, () => 
                          {
                            var player = embed.getPlayer();
                            player.play();  
                          });
                      
                        </script>
                        </div>
                        </div>
                        <a href='../index.php'> <h4 class='texto'>Voltar</h4>";
                      
            }

          }
            ?>
            

             <!-- Add a placeholder for the Twitch embed -->
 
</div>
</div>


</body>
</html>