<?php
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pswd']) && !empty($_POST['txt']))
    {
      include_once('../config.php');
      $user = $_POST['txt'];
      $email = $_POST['email'];
      $pass = $_POST['pswd'];
      $result= mysqli_query($conect, "INSERT INTO Streamer(nome,nomecanal,twitch,imagem) 
      VALUES ('$nome','$nomecanal','$twitch','$novo_nome')");

       header('Location: ../Admistração/Streamers.php');
     }
    ?>
<!-- https://www.youtube.com/watch?v=P9TEc9I8IlI

https://www.youtube.com/watch?v=15CXhnQkilY

https://www.youtube.com/watch?v=QOeDE7nPDq0 -->