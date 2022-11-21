<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="/trocar/auth" method="POST">

        <input type="hidden" name="id" value="<?= $modelSession->id?>">

        <label for="email">Email</label><br>
        <input type="email" name="email" value="<?= $modelSession->email?>"/><br>

        <label for="nome">Nome</label><br>
        <input type="text" name="nome" value="<?= $modelSession->nome?>"/><br>

        <label for="senha">Senha</label><br>
        <input type="password" name="senha"/><br>

        <label for="senha-confirmar">Confirmar Senha</label><br>
        <input type="password" name="senha-confirmar"/><br><br>

        <button type="submit">Confirmar</button>

    </form>
</body>
</html>