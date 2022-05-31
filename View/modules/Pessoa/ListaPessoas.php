<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>CPF</th>
    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
        <td><?= $item['id'] ?></td>
        
        <td>
            <a href="/pessoa/form?id=<?= $item['id'] ?>"><?= $item['nome'] ?></a>
        </td>
        
        <td><?= $item['rg'] ?></td>
        <td><?= $item['cpf'] ?></td>
        
    </tr>
    <?php endforeach ?>

</table>