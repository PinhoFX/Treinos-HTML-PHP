<?php
include_once('../config.php');

if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $img=$_POST['img'];
    $nomecanal=$_POST['nomecanal'];
    $imagem = $_FILES ['imagem'];
    $twitch=$_POST['twitch'];

    if (isset($_FILES['imagem']['name'])  && $_FILES['imagem']['error'] == 0 )
    {
      if ($img!='noimg.png')
        {
          unlink("../Imagens/Streamers/" .$img);
          $extensao= strtolower(substr($_FILES['imagem']['name'],-4));
          $novo_nome= md5(time()) . $extensao;
          $diretorio="../Imagens/Streamers/";
          move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio . $novo_nome);
        }
        else
        {
        $extensao= strtolower(substr($_FILES['imagem']['name'],-4));
        $novo_nome= md5(time()) . $extensao;
        $diretorio="../Imagens/Streamers/";
        move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio . $novo_nome);
        
        }
    }
    else
    {
      $novo_nome=$img;
    }     

    $sqlUpdate="UPDATE torneios SET nome='$nome',nomecanal='$nomecanal',twitch='$twitch',imagem='$novo_nome'
    WHERE id='$id'";
    $result=$conect->query($sqlUpdate);
    

    header('Location: registosstr.php');
}
        
?>
