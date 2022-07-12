<?php
     if(isset($_POST['submit']))
     {
      include_once('../config.php');
      $imagem = $_FILES ['imagem'];
      $id = $user_data ['nid'];

      $extensao= strtolower(substr($_FILES['imagem']['name'],-4));
      $novo_nome= md5(time()) . $extensao;
      $diretorio="/Imagens/Streamers/";
      move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio . $novo_nome);


      $nome = $_POST['nome'];
      $nomecanal = $_POST['nomecanal'];
      $twitch = $_POST['twitch'];
      $result= mysqli_query($conect, "INSERT INTO torneios(nome,nomecanal,twitch,imagem) 
      VALUES ('$nome','$nomecanal','$twitch','$novo_nome')");

    header('Location: ../Admistração/adm.php');
     }
    ?>
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
<body bgcolor="black">

<?php
    include_once('../config.php');
    $sql="SELECT * FROM Streamer ORDER BY id DESC";
    $result=$conect->query($sql);
?>
    <ul>
      <img class="imagem" src="../img/logo.png" width="35PX" height="35px">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../streamers.php">Streamers</a></li>
        <li><a href="../offline.php">Teams</a></li>
        <li><a href="../offline.php">About</a></li>
      </ul>
      <div class="color ">
        <div class="load is-animating">
        <img  class="CENTER tem load"src="../img/logo.png" width="400PX" height="400px">
        </div>
      </div>
    <center>

    <div class="color2">
          <div class="flex">
          <?php 
              while ($user_data = mysqli_fetch_assoc($result)) {
                  ECHO
                       "<div class=card>
                       <a href=https://www.twitch.tv/" . $user_data['twitch'] . ">
                         <img src=../Imagens/Streamers/". $user_data['imagem'] ." alt=Avatar width=300px height=300px>
                       </a>  
                         <div class=container>
                           <h4><b>". $user_data['nome'] ."</b><br><img width=15 src=../img/smalltw.png><font size=4>". $user_data['nomecanal'] ."</font></h4>
                         </div>
                         <a class='btn btn-sm btn-primary' href='editstr.php?id=$user_data[id]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 20 20'>
                        <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
                        </svg></a>
                        <a class='btn btn-sm btn-primary' href='delete.php?id=$user_data[id]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 15 15'>
                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                        </svg></a>
                     </div>";
             }
            ?>
        </div>
    </div>





    </div>
</body>
</html>