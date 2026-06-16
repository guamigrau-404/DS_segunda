<?php 

    require __DIR__.'../../../coon/Banco.php';
    class Departamentos extends Banco{

        protected int $id;
        protected int $id_ordem_servicos;
        protected int $id_executor;
        protected int $id_servico;
        protected DateTime $datahora_execucao;
        protected int $id_departamento; 
        protected int $descicao_execucao;
        protected int $status; //1 - Ativo | 0 - Inativo
        protected DateTime $created_at;        
        protected DateTime $updated_at;
        protected DateTime $deleted_at;
        protected string $descricao;

        public function __construct(){
            $this->conectar();
        }
    }
