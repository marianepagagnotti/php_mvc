<table>
    <tr>
        <th></th>
        <th>Id</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
        <td>
            <a href="/pessoa/delete?id=<?= $item->id ?>">x</a></td>
       
        <td><?= $item->id ?></td>
        
        <td>
            <a href="/pessoa/form?id=<?= $item-> id ?>"><?= $item->nome ?></a>
        </td>
        
        <td><?= $item->cpf ?></td>

        <td><?= $item->telefone ?></td>
        
    </tr>
    <?php endforeach ?>

    <?php if(count($model->rows) == 0): ?>
        <tr>
            <td colspan="5"> Nenhum registro de funcionário encontrado.</td>

        </tr>
        <?php endif ?>

       
</table>