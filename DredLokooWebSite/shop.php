<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="css/cartaocompra.css">
    <title>Shop</title>
</head>
<body>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">Shop</a></li>
        <li><a href="#contact">Contact</a></li>
        <?php
        $id=$_GET['id'];
        include_once('config.php');
        $sql="SELECT * FROM clientes WHERE idClientes='$id' ";
        $result=$conect->query($sql);
          while ($user_data = mysqli_fetch_assoc($result)) {
              ECHO
        "<li style='float:right'><a href=''>Olá ". $user_data['Nome']."</a></li>";
         }
        ?>
        <li style="float: right;"><a href=""><i class="bi bi-cart-fill"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg></a></li>
      </ul> 
    <img src="SiteIMG/logo.png" class="img2"  alt="">
        
        
<hr width="700px">
    <div class="flexs">

    <?php 
           include_once('config.php');
           $sql="SELECT * FROM produtos ORDER BY idProdutos DESC";
           $resultado=$conect->query($sql);
             while ($user_data = mysqli_fetch_assoc($resultado)) {
                  ECHO
                        "<div class='container page-wrapper'>
                        <div class='page-inner'>
                        <div class='row'>
                            <div class='el-wrapper'>
                            <div class='box-up'>
                                <img class='img' src='artigos/".$user_data['Imagem']."' height='200px' alt=''>
                                <div class='img-info'>
                                <div class='info-inner'>
                                    <span class='p-name'>".$user_data['Item']."</span>
                                </div>
                                <div class='a-size'>Tamanhos Disponiveis: <span class='size'>S , M , L , XL</span></div>
                                </div>
                            </div>
                    
                            <div class='box-down'>
                                <div class='h-bg'>
                                <div class='h-bg-inner'></div>
                                </div>
                    
                                <a class='cart' href='#'>
                                <span class='price'>".$user_data['Preço']."€</span>
                                <span class='add-to-cart'>
                                    <span class='txt'>Add in cart</span>
                                </span>
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>";
                }
            ?>

     
    </div>





    <footer>
        <center>
        <font color="White" class="font-size:8vw;"> <h1> Design by P1nhoFX</h1> </font>
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