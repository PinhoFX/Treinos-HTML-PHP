<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/BodyP1.css">
    <link rel="stylesheet" href="css/design.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--      -->
    <title>FENIX</title>
</head>

<body>
    
        <ul>
        <?php 
        $id=$_GET['id'];
        echo"
            <li><a class='active' href=''>HOME</a></li>
            <li><a href='team2.php?id='. $id.'>TEAM</a></li>
            <li><a href='Contacto.php?id='.$id.'>CONTACTO</a></li>
            <li><a href='#about'>SOBRE</a></li>
            ";
            include_once('config.php');
            $sql="SELECT * FROM utilizadores ORDER BY nome DESC";
            $result=$conect->query($sql);
              while ($user_data = mysqli_fetch_assoc($result)) {
                  ECHO
            "<li class='canto'><a href=''><img src='img/utilizadores/". $user_data['imagem']."' width=40px' alt=''></a></li>";
             }
            ?>
            <li class='canto'><a href=''>+</a></li>

        </ul>

    <header class="container">
        <section class="content">
        <div class="imagem">
        <img src="img/LOGO.png" class="img" alt="">
        </div>
    </section>
    </header>
    <!-- <div class="Incio"> 
        <div class="imagem">
            teste
        </div>
    </div> -->





    <footer>
        <center>
        <font color="White" class="font-size:8vw;"> <h1> Design by Paulo Pinho</h1> </font>
         
        
        <div class="icons">
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-twitter"></a>   
            <a href="#" class="fa fa-twitch"></a>  
            <a href="#" class="fa fa-instagram"></a>  
        </div> 
     
       </center> 
    </footer>
</body>
</html>



