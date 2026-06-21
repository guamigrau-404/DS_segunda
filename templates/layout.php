<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title ?? 'Meu Sistema'; ?></title> 
        <link rel="stylesheet" href="/css/style.css">
    </head>

    <h1>SISOS</h1>
    <body>
        <main class="container">
            <?php echo $content ?? ''; ?>
        </main>
    </body>

    <footer>
        <p><?php echo date('Y'); ?> - S.I.S.O.S.</p>
    </footer>
</html>