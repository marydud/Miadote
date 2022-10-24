<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro Miadote</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="undraw_good_doggy_re_eet7.svg">
        </div>
        <div class="form">
            <form action="validacao.php" method="post">
                <div class="logo">
                    <img src="logogato.png" width="160" height="65" />
                    <div class="login-button">
                        <button> <a href="login.php"> Entrar </a></button>
                    </div>
                </div>
                <div class="form-header">
                    <div class="title">
                        <h1>Criar conta </h1>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Nome completo</label>
                        <input id="name" type="text" name="name" placeholder="Digite seu nome" required>
                    </div>
                
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                    </div>
                    <div class="input-box">
                        <label for="number">Número para contato</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>
                </div>
    
                    <div class="button">
                        <button type="submit" name="submit">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
