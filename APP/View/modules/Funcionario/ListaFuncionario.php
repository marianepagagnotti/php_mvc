<table>
    <tr>
        
        <th></th>
        <th>Id</th>
        <th>Nome</th>
        <th>RG</th>
        <th>Telefone</th>


    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
        <td>
            <a href="/funcionario/delete?id=<?= $item->id ?>">x
        
            <td><?= $item->id ?></td>
        </td>

        <td>
            <a href="/funcionario/form?id=<?= $item->id ?>"><?= $item->nome?>
        </td>

        <td><?= $item->rg ?></td>

        <td><?= $item->telefone ?></td>

    </tr>
    <?php endforeach ?>

    <?php if(count($model->rows) == 0): ?>
        <tr>
            <td colspan="5"> Nenhum registro de funcionário encontrado.</td>

        </tr>
        <?php endif ?>

        

</table>

 