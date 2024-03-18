<?php

    include("protect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katzenet</title>

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body> 
    <header>
        <div class="header">
            <div class="imlogo"></div>
            <div class="plogo">
                <h1>Katze.net</h1>
            </div>
        </div>

        <div class="menu">
            <ul>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Software</a></li>
            </ul>
        </div>

    </header>

    Bem vindo ao site, <?php echo $_SESSION['nome']; ?>

    <p>
        <a href="logout.php">Sair</a>

    </p>
    
    </Footer>

    <div class="footer">
        <h2>Katze.Net</h2>
        <div class="sociais">
            <div class="social">
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="social">
                <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            </div>
            <div class="social">
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</body>

</html>