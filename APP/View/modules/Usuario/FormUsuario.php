<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
    <style>
        label,
        input {
            display: block;
        }
    </style>
</head>

<body>
    <form action="/usuario/save" method="post">
        <fieldset>

            <input name="id" value= "<?= $model-> id ?>" type="hidden"/>
            <legend>Cadastro de Usuario</legend>
            
            <label for="nome">Nome:</label>
            <input name="nome" id="nome" value= "<?= $model-> nome ?>" type="text" />

            <label for="email">Email:</label>
            <input name="email" id="email" value= "<?= $model-> email ?>" type="text" />

            <label for="senha">Senha:</label>
            <input name="senha" id="senha"  value= "<?= $model-> senha ?>"type="password" />

            

            <button type="submit">Enviar</button>

        </fieldset>
    </form>
</body>

</html>