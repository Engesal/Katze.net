<?php

    if(isset($_POST['submit'])) 
    {

        include_once('cadaconfig.php');

        $nome = $_POST['nome'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,cidade,estado,telefone,email,senha) 
        VALUES ('$nome','$cidade','$estado','$telefone','$email','$senha')");

    }

?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Faça seu cadastro</title>
    
        <link rel="stylesheet" href="cada.css">
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

        <div class="pagina">
            <div class="centro">
                <form method="POST" action="cada.php">
                    <h2>CADASTRE-SE:</h2>
                    <br>
                    <p>Digite seus dados.</p>
                    <input class="campo" type="text" name="nome" placeholder="Nome completo.">
                    <input class="campo" type="text" name="cidade" placeholder="Qual cidade reside.">
                    <input class="campo" type="text" name="estado" placeholder="Qual estado reside.">
                    <input class="campo" type="tel" name="telefone" placeholder="Digite seu telefone.">
                    <input class="campo" type="text" name="email" placeholder="Digite seu Email.">
                    <input class="campo" type="password" name="senha" placeholder="Digite sua Senha.">
                    <input class="campo" type="password" name="senha" placeholder="Confirme sua Senha.">
                    <input class="btn" type="submit" name="submit" value="Acessar">
                    <p>Já possui conta?<a href="index.php">login</a></p>
                </form> 
            </div>
        </div> 
    
        <Footer>
            <div class="boxs">
                <h2>Inicio</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Software</a></li>
                </ul>
            </div>
            <div class="boxs">
                <h2>Informações</h2>
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Email</a></li>
                </ul>
            </div>
            <div class="boxs">
                <h2>Suporte</h2>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Telefone</a></li>
                    <li><a href="#">Chat</a></li>
                </ul>
            </div>
            <div class="boxs">
                <h2>Sobre nós</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad non cumque, excepturi fugiat quaerat rerum? Eius molestias autem esse nisi tempora, accusantium amet! Inventore error deserunt at vitae sunt dolores.
                </p>
            </div>
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