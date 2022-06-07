<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
</tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
        
        <td>
            <a href="/categoria/delete?id=<?= $item['id'] ?>">x</a>
        </td>
    
        <td><?= $item['id'] ?></td>
        
        <td>
            <a href="/categoria/form?id=<?= $item['id'] ?>"><?= $item['nome'] ?></a>
        </td>
      
    </tr>
    <?php endforeach ?>

</table>