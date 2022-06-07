<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/produto/save" method="post">
        <fieldset>
            
            <input name="id" value= "<?= $model-> id ?>" type="hidden">
            
            <legend>Cadastro de Produto</legend>
            <label for="nome">Nome:</label>
            <input name="nome" value= "<?= $model-> nome ?>" id="nome" type="text" />

            <label for="preco">Preço:</label>
            <input name="preco" value= "<?= $model-> preco ?>" id="preco" type="number" />

            <label for="descricao">Descrição :</label>
            <input name="descricao" value= "<?= $model-> descricao?>" id="descricao" type="text" />

           <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>