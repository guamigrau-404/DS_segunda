<?php
    require __DIR__.'/../classes/coon/Banco.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cartao-login"><h1>Login</h1>
        <form method="post">
            <label>Usuario</label>
            <input type="text" name="usuario" require></input>
            <label>senha</label>
            <input type="password" name="senha" require></input>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>