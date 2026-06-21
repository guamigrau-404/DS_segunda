<?php
    require __DIR__.'/src/classes/sistema/cadastros/Departamentos.php';

    $dpt = new Departamentos();

    // 1. OBRIGATÓRIO: Inicia a sessão. Tem que ser a primeira linha do arquivo!
    session_start(); 

    $title = "Página Inicial - SISOS";
    ob_start();

    // 2. A CONDICIONAL: Verifica se o usuário NÃO está logado
    if (!isset($_SESSION['usuario_id'])) {
        //tela de login
    }else{
        $title = "Página Inicial - SISOS";
        ob_start();
        ?>
        <h2>Hello World!</h2>
        <h1>Seja bem-vindo ao Sistema de Ordens de Serviço para assistências softwares😊</h1>
        <a href="cadastro_os.php" class="btn btn-success">
            <i class="bi bi-plus-lg"  style="-webkit-text-stroke: 1px currentColor;"></i> Nova Ordem de Serviço
        </a>
        <div class="card">   
            <h3>Dados do Sistema</h3>
            <p>Aqui você pode listar coisas do banco de dados, etc.</p>
        </div>
        <?php
        // Desliga o gravador e joga todo o HTML acima dentro da variável $content
        $content = ob_get_clean();
    }

    require __DIR__.'/templates/layout.php';
?>