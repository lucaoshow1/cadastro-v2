<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">

    <a href="#" class="logo"> RIO </a>

    <nav class="navbar">
        <a href="#">HOME</a>
        <a href="#">VIAGENS</a>
        <a href="#">PACOTES</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    
    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <form action="" class="login-form">
        <h3>login</h3>
        <input type="email" placeholder="Email" class="box">
        <input type="password" placeholder="Senha" class="box">
        <p>Esqueceu sua senha <a href="#">clique aqui</a></p>
        <p>Não tem uma conta <a href="#">crie agora</a></p>
        <input type="submit" value="Entrar" class="btn">
    </form>
</header>

<main>
    <div class="main_container">
     
        <div class="container-form">
            <form action="" method="post">
                <h2>CADASTRE-SE</h2>
                <div class="nome">
                    <input type="text"
                    name="nome"
                    placeholder="Nome"
                    value="<?php if (isset($nome)) echo $nome;?>"
                    
                    
                    >
                </div>

                <div class="sobrenome">
                    <input type="text"
                    name="sobrenome"
                    placeholder="Sobrenome"
                    value="<?php if (isset($sobrenome)) echo $sobrenome;?>"
                    >
                </div>

                <div class="email">
                    <input type="email"
                    name="email"
                    placeholder="E-mail"
                    value="<?php if (isset($email)) echo $email;?>"
                    >
                </div>

                <div class="sobrenome">
                    <input type="text"
                    name="telefone"
                    placeholder="(21) 98888-8888"
                    value="<?php if (isset($telefone)) echo $telefone;?>"
                    >
                </div>
                
                <div class="sobrenome">
                    <input type="text"
                    name="nascimento"
                    placeholder="DD/MM/AAAA"
                    value="<?php if (isset($nascimento)) echo $nascimento;?>"
                    >
                </div>

                <div class="senha">
                    <input type="password"
                    name="senha"
                    placeholder="Senha" 
                    value="<?php if (isset($senha)) echo $senha;?>"
                    >
                </div>
            
                <div class="confir-senha">
                    <input type="password"
                    name="confir-senha"
                    placeholder="Confirme sua senha"
                    value="<?php if (isset($confirSenha)) echo $confirSenha;?>"
                    >
                </div>

                <div class="buttons-cad">
                    <div class="resetar">
                        <button type="reset">RESETAR</button>
                    </div>
                    <div class="confirmar ">
                        <button type="submit" name="concluir">CONCLUIR</button>


                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

</div>
</body>
</html>

<?php
include ('func\funcionalidades.php');
include ('func\validacoes-bd.php');
?> 

<script src="js/script.js"></script>

</body>
</html>