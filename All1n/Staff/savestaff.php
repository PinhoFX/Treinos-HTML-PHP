<?php
include_once('../config.php');

if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $img=$_POST['img'];
    $cargo=$_POST['cargo'];
    $imagem = $_FILES ['imagem'];

    if (isset($_FILES['imagem']['name'])  && $_FILES['imagem']['error'] == 0 )
    {
      if ($img!='noimg.png')
        {
          unlink("../Imagens/CEO/" .$img);
          $extensao= strtolower(substr($_FILES['imagem']['name'],-4));
          $novo_nome= md5(time()) . $extensao;
          $diretorio="../Imagens/CEO/";
          move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio . $novo_nome);
        }
        else
        {
        $extensao= strtolower(substr($_FILES['imagem']['name'],-4));
        $novo_nome= md5(time()) . $extensao;
        $diretorio="../Imagens/CEO/";
        move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio . $novo_nome);
        
        }
    }
    else
    {
      $novo_nome=$img;
    }     

    $sqlUpdate="UPDATE Staff SET nome='$nome',cargo='$cargo',imagem='$novo_nome'
    WHERE id='$id'";
    $result=$conect->query($sqlUpdate);
    

    header('Location: ../Admistração/Staff.php');
}
        
?>
