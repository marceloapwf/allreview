<?php
    include("PHP/login.php");
    include("PHP/signup.php");

?>

<!DOCTYPE html>
    <head>
        <title>Teste CSS</title>
        <link href="CSS/teste.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    </head>
    <body>
       
        <div class="title-login">
            <span>Login</span>
        </div>

        <div class="title-cadastro hidden">
            <span>Cadastro</span>
        </div>

        <form method="POST" class="form-login">
            
            <div class="inputDiv">
                <div class="labels">
                    <label for="inputData">Email</label>
                </div>
                <input type="text" class="inputData"  name="email" placeholder="Insira seu email">
            </div>

            

            <div class="inputDiv">
                <div class="labels">
                    <label for="inputData">Senha</label>
                </div>
                <input type="password" class="inputData" name="password" placeholder="*********">
            </div>

            <div class="inputDivSenha hidden"></div>

            <div class="inputDiv-button">
                
                <button type="submit" class="button-submit" name="btn-login" value="submit"><i class="fas fa-id-card"></i><span>Entrar</span></button>
            </div>

            <div class="inputDiv inputDiv-link">
                <a href="" id="link-cadastro">Não tem uma conta? Cadastre-se</a>
            </div>

        </form>


        <form method="POST" class="form-cadastro hidden">
            
            <div class="inputDiv">
                <div class="labels">
                    <label for="inputData">Nome</label>
                </div>
                <input type="text" class="inputData" name="nome" placeholder="Insira seu nome">
            </div>

            <div class="inputDiv">
                <div class="labels">
                    <label for="inputData">Email</label>
                </div>
                <input type="text" class="inputData" name="email" placeholder="Insira seu email">
            </div>

            <div class="inputDiv">
                <div class="labels">
                    <label for="inputData">Senha</label>
                </div>
                <input type="password" class="inputData" name="password" placeholder="*********">
            </div>

            <div class="inputDiv inputDiv-last">
                <div class="labels">
                    <label for="inputData">Repita a senha</label>
                </div>
                <input type="password" class="inputData" name="password2" placeholder="*********">
            </div>

            <div class="inputDiv-button">
                
                <button type="submit" class="button-submit" name="btn-cadastro" value="submit"><i class="fas fa-id-card"></i><span>Cadastrar</span></button>
            </div>
            
            <div class="inputDiv inputDiv-link">
                <a href="" id="link-login">Tem uma conta? Faça login</a>
            </div>

        </form>

        <div class="footer"></div>


        <script src="teste.js"></script>
    </body>

</html>