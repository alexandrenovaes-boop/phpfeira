<h1>Lista de jogos</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Ano</th>
        <th>Nota</th>
        <th>Gênero</th>
        <th>Ações</th>
    </tr>
    <?php while($linha = $jogos ->fetch_assoc()): ?>
        <tr>
            <td><?=htmlspecialchars(string: $linha['nome']) ?></td>
            <td><?=htmlspecialchars(string: $linha['ano']) ?></td>
            <td><?=htmlspecialchars(string: $linha['nota']) ?></td>
            <td><?=htmlspecialchars(string: $linha['genero']) ?></td>
            <td>
                <a href="?action=editar&id=<?= $linha['id'] ?>">Editar</a>
                <a href="?action=deletar&id=<?= $linha['id'] ?>">Deletar</a>
                
            </td>
        </tr>
            <?php endwhile; //endwhile o seu papel é o fechamento como as chaves{}//?> 
</table>
<a href="?action=adicionar">Cadastro</a>