<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title ?? 'Meu Sistema'; ?></title> 
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: white;
            font-family: monospace;
        }
        header {
            background-color: powderblue; 
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>

    <header>
        <h1><?php echo $title ?></h1>
    </header>
    <body>
        <main class="container">
            <?php echo $content ?? ''; ?>
        </main>
    </body>

    <footer>
        <p><?php echo date('Y'); ?> - S.I.S.O.S.</p>
    </footer>
</html>