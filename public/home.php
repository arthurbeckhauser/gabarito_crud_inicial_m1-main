<?php
// Requisito 1: Verificação de sessão modularizada
include("./components/session_check.php");
include("../infra/db/connect.php");

$mensagem = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $novoUsuario = $_POST['usuario'];
    $novaSenha = $_POST['senha'];

    // Melhoria 1: Verificação de usuário duplicado no cadastro
    $checkSql = "SELECT id FROM usuarios WHERE usuario = '$novoUsuario'";
    $checkResult = $conn->query($checkSql);

    if($checkResult && $checkResult->num_rows > 0) {
        $mensagem = "<p class='erro'>Erro: Este usuário já está cadastrado!</p>";
    } else {
        $sql = "INSERT INTO usuarios (usuario, senha) VALUES ('$novoUsuario', '$novaSenha')";  

        if($conn->query($sql) === TRUE){
            $mensagem = "<p class='sucesso'>Usuário cadastrado com sucesso!</p>";
        }else{
            $mensagem = "<p class='erro'>Erro ao cadastrar no banco de dados.</p>";
        }
    }
}

// Requisito 1: Cabeçalho modularizado
include("./components/header.php");
?>

    <h3>Bem-Vindo, <?php echo htmlspecialchars($_SESSION["usuario"]); ?>!</h3>
    <a href="logout.php" class="btn-sair" onclick="return confirm('Tem certeza que deseja sair do sistema?')">Sair do Sistema</a>

    <hr>
    <h4>Cadastro de Novo Usuário</h4>
    
    <?php echo $mensagem; ?>

    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario" required>
        
        <label>Senha:</label>
        <input type="password" name="senha" required>
        
        <button type="submit">Cadastrar</button>
    </form>
    
    <hr>
    <h4>Lista de Usuários Cadastrados</h4>

    <?php 
        // Inclui a tabela de listagem
include("./components/table.php"); 
?>

    <script>
    function confirmarExclusao(id) {
        if (confirm("Tem certeza absoluta de que deseja excluir este usuário?")) {
            window.location.href = "excluir.php?id=" + id;
        }
    }
    </script>

<?php 
// Requisito 1: Rodapé modularizado
include("./components/footer.php"); 
?>