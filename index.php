<?php
    session_start();

    include("infra/db/connect.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        // Em um sistema real, usaríamos Prepared Statements e password_hash, 
        // mantido a estrutura simples com correção para evitar quebras.
        $usuario = $conn->real_escape_string($usuario);
        $senha = $conn->real_escape_string($senha);

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $resultado = $conn->query($sql);

        if ($resultado && $resultado->num_rows > 0){
            $_SESSION["usuario"] = $usuario;
            header("Location: public/home.php");
            exit();
        }else{
            $erro = "Usuário ou senha inválidos!";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; background-color: #f4f4f9; text-align: center; }
        form { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); display: inline-block; text-align: left; }
        input { margin-bottom: 15px; padding: 8px; width: 250px; display: block; }
        button { padding: 10px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; width: 100%; }
        .erro { color: red; }
    </style>
</head>
<body>

    <h1>Sistema de Login Simples</h1>

    <form method="POST">
        <?php if(isset($_GET['erro']) && $_GET['erro'] == 'restrito'): ?>
            <p class="erro">Por favor, faça login para acessar o sistema.</p>
        <?php endif; ?>

        <label>Usuário:</label>
        <input type="text" name="usuario" required>
        
        <label>Senha:</label>
        <input type="password" name="senha" required>
        
        <?php if(isset($erro)) { echo "<p class='erro'>$erro</p>"; } ?>
        
        <button type="submit">Entrar</button>
    </form>

</body>
</html>