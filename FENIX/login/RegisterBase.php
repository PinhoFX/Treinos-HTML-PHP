<?php
     if(isset($_POST['submit']))
     {
      include_once('../config.php');
      $imagem = $_FILES ['imagem'];
      $img='uti.png';


      if (isset($_FILES['imagem']['name']) && $_FILES['imagem']['error'] == 0 )
    {
        $extensao= strtolower(substr($_FILES['imagem']['name'],-4));
        $novo_nome= md5(time()) . $extensao;
        $diretorio="../img/utilizadores/";
        move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio . $novo_nome);
    }
    else
    {
      
      $novo_nome=$img;
    }    
      $nome = $_POST['nome'];
      $pass = $_POST['pass'];
      $result= mysqli_query($conect, "INSERT INTO utilizadores(nome,pass,imagem) 
      VALUES ('$nome','$pass','$novo_nome')");

    $sql = "SELECT * FROM utilizadores WHERE nome = '$nome'";
    $result2=$conect->query($sql);
    $user_data = mysqli_fetch_assoc($result2);
    header('Location: ../index2.php?id='.$user_data['idUtilizadores'].'');
     }
    ?>
<!-- https://www.youtube.com/watch?v=P9TEc9I8IlI

https://www.youtube.com/watch?v=15CXhnQkilY

https://www.youtube.com/watch?v=QOeDE7nPDq0 -->