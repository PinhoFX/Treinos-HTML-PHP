<?php
     if(isset($_POST['submit']))
     {
      include_once('../config.php');
      $imagem = $_FILES ['imagem'];
      $img='noimg.png';


      if (isset($_FILES['imagem']['name'])  && $_FILES['imagem']['error'] == 0 )
    {
      
        unlink("../Imagens/Streamers/" .$img);
        $extensao= strtolower(substr($_FILES['imagem']['name'],-4));
        $novo_nome= md5(time()) . $extensao;
        $diretorio="../Imagens/Streamers/";
        move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio . $novo_nome);   
    }
    else
    {
      $novo_nome=$img;
      
    }     
      // if ($_FILES['imagem']['name']>0)
      // {
      //   $extensao= strtolower(substr($_FILES['imagem']['name'],-4));
      //   $novo_nome= md5(time()) . $extensao;
      //   $diretorio="../Imagens/Streamers/";
      //   move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio . $novo_nome);
      // }
      // else
      // {
      //   $img='noimg.png';
      // }
      


      $nome = $_POST['nome'];
      $nomecanal = $_POST['nomecanal'];
      $twitch = $_POST['twitch'];
      $result= mysqli_query($conect, "INSERT INTO Streamer(nome,nomecanal,twitch,imagem) 
      VALUES ('$nome','$nomecanal','$twitch','$novo_nome')");

       header('Location: ../Admistração/Streamers.php');
     }
    ?>
<!-- https://www.youtube.com/watch?v=P9TEc9I8IlI

https://www.youtube.com/watch?v=15CXhnQkilY

https://www.youtube.com/watch?v=QOeDE7nPDq0 -->