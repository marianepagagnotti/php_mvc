<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th>
    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
        <td><?= $item['id'] ?></td>
        <td>
            <a href="/produto/form?id=<?= $item['id'] ?>"><?= $item['nome'] ?></a>
        </td>
        
        <td><?= $item['preco'] ?></td>
        
        
    </tr>
    <?php endforeach ?>

</table>