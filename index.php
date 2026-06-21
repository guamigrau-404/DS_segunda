<?php
    require __DIR__.'/src/classes/sistema/cadastros/Departamentos.php';

    $dpt = new Departamentos();

    $title = "Página Inicial - SISOS";
    ob_start();
    ?>
    <h2>Hello World!</h2>
    <h1>Seja bem-vindo ao Sistema de Ordens de Serviço para assistências softwares😊</h1>
    <div class="card">
        <h3>Dados do Sistema</h3>
        <p>Aqui você pode listar coisas do banco de dados, etc.</p>
    </div>
    <?php
    // Desliga o gravador e joga todo o HTML acima dentro da variável $content
    $content = ob_get_clean();

    require __DIR__.'/templates/layout.php';
?>