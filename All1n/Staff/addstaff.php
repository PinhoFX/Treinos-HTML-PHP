<?php
     if(isset($_POST['submit']))
     {
      include_once('../config.php');
      $imagem = $_FILES ['imagem'];
      $img='noimg.png';


      if (isset($_FILES['imagem']['name'])  && $_FILES['imagem']['error'] == 0 )
    {
      
        unlink("../Imagens/CEO/" .$img);
        $extensao= strtolower(substr($_FILES['imagem']['name'],-4));
        $novo_nome= md5(time()) . $extensao;
        $diretorio="../Imagens/CEO/";
        move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio . $novo_nome);   
    }
    else
    {
      $novo_nome=$img;
    }    
      $nome = $_POST['nome'];
      $cargo = $_POST['cargo'];
      $result= mysqli_query($conect, "INSERT INTO Staff(nome,imagem,cargo) 
      VALUES ('$nome','$novo_nome','$cargo')");

header('Location: ../Admistração/Staff.php');
     }
    ?>
<!-- https://www.youtube.com/watch?v=P9TEc9I8IlI

https://www.youtube.com/watch?v=15CXhnQkilY

https://www.youtube.com/watch?v=QOeDE7nPDq0 -->