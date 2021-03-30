<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['btn-cadastro']) && $_POST['btn-cadastro'] == "submit"){

            $email = $_POST['email'];
            $nome = $_POST['nome'];
            $password = $_POST['password'];	
            $password2 = $_POST['password2'];	

            if(!empty($email) && !empty($nome) && !empty($password) && !empty($password2) && !is_numeric($email)){

                if(!($password === $password2)){
                    //aqui devo fazer alguma coisa que mude a tela de cadastro, dizendo que as senhas estao diferentes
                    $senhas_iguais = false;
                }else{
                    $query = "select * from usuarios where email = '$email'";
                    $result = mysqli_query($con, $query);
                    $num_rows = mysqli_num_rows($result);
                    if($num_rows > 0){
                        $usuario_ja_registrado = true;

                    }else{
            
                        $query = "insert into usuarios (email, nome, senha) values ('$email', '$nome', '$password')";
                        mysqli_query($con, $query);
                        //header("Location: index.php");
                    }
                }
            }
        }
    }
?>