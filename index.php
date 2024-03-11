<?php

include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo '<script>alert("Preencha seu e-mail")</script>';

    } else if (strlen($_POST['senha']) == 0) {
        echo '<script>alert("Preencha sua senha")</script>';
}   else {
    
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        
        header("Location: principal.php");
        
    } else {
        echo '<script>alert("Falha ao logar ! E-mail ou senha incorretos")</script';
    }
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KatzenetLogin</title>

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
    <div class="pagina">
        <div class="centro">
            <form method="POST" action="">
                <h2>Login</h2>
                <p>Digite seus dados.</p>
                <input class="campo" type="text" name="email" placeholder="Digite seu Email.">
                <input class="campo" type="password" name="senha" placeholder="Digite sua Senha.">
                <a href="#">Esqueci minha Senha</a>
                <input class="btn" type="submit" value="Acessar">
                <p>Ainda não possui conta <a href="#">Crie uma agora.</a></p>
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