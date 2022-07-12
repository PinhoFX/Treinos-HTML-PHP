<?php
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pass']))
    {
        include_once('../config.php');
        $email= $_POST['email'];
        $pass= $_POST['pass'];
        $adm=$_POST['CARGO'];
        // print_r('Nome: ' . $email);
        // print_r('Senha: ' . $pass);
        // print_r('ADM: ' . $adm);
        
  
        $sql = "SELECT * FROM Pessoas WHERE pass = '$pass' and email = '$email'";
        $result = $conect->query($sql);
        if(mysqli_num_rows($result)<1)
        {
            header('Location: log.php');
        }
        else
        {
            $sql = "SELECT * FROM utilizadores WHERE pass = '$pass' and email = '$email' and CARGO = '$adm'";
            $result = $conect->query($sql);
            if(mysqli_num_rows($result)>0)
            {
                header('Location: index2.php');
            }
            else 
            {
                header('Location: ../Admistração/adm.php');
            }
            
       }

    }
    else
    {
        header('Location: login.php');
    }
?>
