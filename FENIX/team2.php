<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/team.css">
    
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
            <li><a href='index2.php?id=".$id."'>HOME</a></li>
            <li><a class='active' href=''>TEAM</a></li>
            <li><a href='Contacto.html'>CONTACTO</a></li>
            <li><a href='#about'>SOBRE</a></li>
            ";
            $id=$_GET['id'];
            include_once('config.php');
            $sql="SELECT * FROM utilizadores ORDER BY nome DESC";
            $result=$conect->query($sql);
              while ($user_data = mysqli_fetch_assoc($result)) {
                  ECHO
            "<li class=' canto '><a href=''><img src='img/utilizadores/". $user_data['imagem']."' class='redondo' width='40px' alt=''></a></li>";
             }
            ?>
        </ul>

                 <img src="img/LOGO.png" class="img"  alt="">
        
        
        
        


                <div class="flexs" >
                    <div class="fundocard">
                        <img src="img/backfundo2.png" height="300" alt="">
                        <div>
                            <table >
                                <tr>
                                    <td>
                                        <img src="img/StorM Youngsters.png" class="redondo" height="50px" alt="">
                                        
                                    </td>
                                    <td></td>
                                    <td>
                                        <h2>P1nhoFX</h2>
                                    </td>
                                </tr>
                            </table>
                           
                        </div>
                    </div>
                 </div>







        <footer>
            <center>
            <font color="purple" class="font-size:8vw;"> <h1> Design by Paulo Pinho</h1> </font>
             
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