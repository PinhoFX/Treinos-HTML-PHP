<?php
include_once('../config.php');

if(!empty($_GET['id']))
{
    $id=$_GET['id'];
    $sqlSelect="SELECT * FROM Streamer WHERE id='$id'";
    $result=$conect->query($sqlSelect);
    $user_data=mysqli_fetch_assoc($result);
    $img=$user_data['imagem'];
    if ($img!='noimg.png')
    {
        unlink("../Imagens/Streamers/" .$img);
    }
    if($result->num_rows>0)
    {
        $sqlDelete = "DELETE FROM Streamer WHERE id='$id'";
        $resultDelete=$conect->query($sqlDelete);
    }
}   
header('Location: ../Admistração/Streamers.php');
        
?>
