<?php
     if(isset($_POST['submit']))
     {
      include_once('../config.php');
  
      $nome = $_POST['nome'];
      $nos = $_POST['nos'];
      $eles = $_POST['eles'];
      $imagem = $_FILES ['imagem'];


      $extensao= strtolower(substr($_FILES['imagem']['name'],-4));
      $novo_nome2= md5(time()) . $extensao;
      $diretorio="../Imagens/torneios/";
      move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio . $novo_nome2);   
      $novo_nome="ALL1N.png";

      $result= mysqli_query($conect, "INSERT INTO torneios(nome,nos,eles,n1,n2) 
      VALUES ('$nome','$nos','$eles','$novo_nome','$novo_nome2')");

       header('Location: ../Admistração/torneios.php');
     }
    ?>
<!-- https://www.youtube.com/watch?v=P9TEc9I8IlI

https://www.youtube.com/watch?v=15CXhnQkilY

https://www.youtube.com/watch?v=QOeDE7nPDq0 -->