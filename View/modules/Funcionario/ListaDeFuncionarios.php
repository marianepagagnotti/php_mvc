<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>RG</th>
    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
        <td>
            <a href="/funcionario/delete?id=<?= $item['id'] ?>">x</a>
        </td>
    
        <td><?= $item['id'] ?></td>
        
        <td>
            <a href="/funcionario/form?id=<?= $item['id'] ?>"><?= $item['nome'] ?></a>
        </td>
        
        <td><?= $item['rg'] ?></td>
        
    </tr>
    <?php endforeach ?>

</table>