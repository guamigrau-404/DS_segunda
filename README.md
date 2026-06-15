# ## **Arquivo Leia-me do SISOS** ## #

## SOBRE OQUE ESTAMOS FAZENDO O PROJETO? ##

Sistema de Ordens de Serviço para assitencias Softwares (chamados)

## O QUE ELE FAZ? ##

**1º Registra uma O.S**<br>
**2º Gera indicadores(Relatórios) de Gestão**<br>
**3º Monitorar o tempo de execução de cada tarefa executada na O.S**<br>
**4º Controlar o Fluxo de Trabalho da O.S**<br>

## CLASSES/ENTIDADES ##

**OrdemServicos** <br>
<p>
    Código <br>
    Requisitante <br>
    Data/hora <br>
    Tipo da Solicitacao <br>
    id_departamento <br>
    data ultima alteração <br>
    data criação <br>
    data deleção <br>
    Dados da Solicitação <br>
    status
</p>

**OrdemServicosTarefas** <br>
<p>
    Código <br>
    id_ordem_servicos <br>
    id_executor <br>
    id_servico <br>
    Data/hora Execucao<br>
    id_departamento <br>
    Dados da Execucao <br>
    data ultima alteração <br>
    data criação <br>
    data deleção <br>    
    status
</p>

**Usuários** <br>
<p>
    Código <br>
    Nome <br>
    id_departamento <br>
    eh_executor <br>
    eh_cliente <br>
    email <br>
    nome_usuario <br>
    senha <br>
    data criação <br>
    data ultima alteração <br>    
    data deleção <br>
    status
</p>

**Departamentos**<br>
<p>
    Código <br>
    Nome <br>
    id_lider <br>
    data criação <br>
    data ultima alteração <br>    
    data deleção <br>
    status
</p>

**Servicos**
<p>
    Código <br>
    Nome <br>
    tempo_duração <br>
    data criação <br>
    data ultima alteração <br>    
    data deleção <br>
    status
</p>

    

