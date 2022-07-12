<?php
    if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['pass']))
    {
        include_once('../config.php');
        $nome= $_POST['nome'];
        $pass= $_POST['pass'];
        print_r('Nome: ' . $nome);
        print_r('Senha: ' . $pass);
  
        $sql = "SELECT * FROM utilizadores WHERE Pass = '$pass' and nome = '$nome'";
  
        $result = $conect->query($sql);
      
        if(mysqli_num_rows($result)<1)
        {
            header('Location: login.php');
        }
        else
        {
            $sql = "SELECT * FROM utilizadores WHERE nome = '$nome'";
            $result2=$conect->query($sql);
            $user_data = mysqli_fetch_assoc($result2);
            header('Location: ../index2.php?id='.$user_data['idUtilizadores'].'');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>
