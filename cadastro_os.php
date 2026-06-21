<?php
    $title = "Nova OS - SISOS";
    ob_start();
    ?>
    <form action="salvar_os.php"><!-- tem que criar um controller que salve esses dados no database-->
        <div class="table table-responsive"></div>
            <table class="table">
                <thead> <!--cabeçalho -->
                    <tr style="min-width: 180px;"> <!--linha -->
                    <!--colunas -->
                        <th>Requisitante</th> 
                        <th>Tipo de Solicitação</th>
                        <th>Departamento</th>
                        <th>Detalhes</th>
                        <th>Data e horário</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="tel" class="form-control" name="requisitante" placeholder="ex. Mohamed Lee"></td>
                        <td><input type="text" class="form-control" name="tipo_de_solicitacao" placeholder="ex. Manutenção de Servidor"></td>
                        <td><input type="tel" class="form-control" name="departamento" placeholder="Departamento X"></td>
                        <td><input type="text" class="form-control" name="detalhes" placeholder="Do que se trata?"></td>
                        <td><input type="datetime-local" class="form-control" name="data_hora_ligacao"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button type="submit" class="btn btn-primary mt-3">
                <i class="fas fa-paper-plane"></i> Enviar Dados
        </button>
    </form>
    <?php
    $content = ob_get_clean();
    require __DIR__.'/templates/layout.php';
?>