<table>
    <tr>
        
        <th></th>
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th>
        <th> Descrição </th>
    </tr>

    <?php foreach ($model->rows as $item) : ?>


        <tr>
            <td>
                <a href="/produto/delete?id=<?= $item->id ?>">x</a>
            
                <td><?= $item->id ?></td>
            </td>

            <td>
                <a href="/produto/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td>
                <?= $item->preco ?>
            </td>

            <td>
                <?= $item->descricao ?>
            </td>
            
        </tr>
    <?php endforeach ?>

    <?php if (count($model->rows) == 0) : ?>
        <tr>
            <td colspan="5"> Nenhum registro encontrado.</td>

        </tr>
    <?php endif ?>

    

</table>

</body>

</html>