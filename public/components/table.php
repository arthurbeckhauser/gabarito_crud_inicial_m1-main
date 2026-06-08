<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="5" style="border-collapse: collapse; width: 100%; max-width: 600px;">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Excluir</th>
        <th>Editar</th>
    </tr>

    <?php
    
    $sqlTodosUsuarios = "SELECT * FROM usuarios";

    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);

    while($linha = $resultadoTodosUsuarios->fetch_assoc()){

        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". htmlspecialchars($linha['usuario']) . "</td>
                    
                    <td>******</td>
                    
                    <td> <a href='javascript:void(0);' onclick='confirmarExclusao(". $linha['id'] .")' style='color: red; font-weight: bold;'>Excluir</a> </td>

                    <td> <a href='editar.php?id=". $linha['id'] ."'> Editar</a> </td>
                </tr>
        ";

    }
    
    ?>

</table>