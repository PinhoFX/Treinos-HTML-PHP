<?php
    if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['pass']))
    {
        include_once('../config.php');
        $nome= $_POST['nome'];
        $pass= $_POST['pass'];
        print_r('Nome: ' . $nome);
        print_r('Senha: ' . $pass);
  
        $sql = "SELECT * FROM usuarios WHERE pass = '$pass' and nome = '$nome'";
  
        $result = $conect->query($sql);
      
        if(mysqli_num_rows($result)<1)
        {
            header('Location: login.php');
        }
        else
        {
            header('Location: adm.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>
