<?php
include_once('../config.php');

if(!empty($_GET['id']))
{
    $id=$_GET['id'];
    $sqlSelect="SELECT * FROM torneios WHERE id='$id'";
    $result=$conect->query($sqlSelect);
    $user_data=mysqli_fetch_assoc($result);
    $img=$user_data['n2'];
    unlink("../imagens/torneios/".$img);
    if($result->num_rows>0)
    {
        $sqlDelete = "DELETE FROM torneios WHERE id='$id'";
        $resultDelete=$conect->query($sqlDelete);
    }
}   
header('Location: ../Admistração/torneios.php');
        
?>
