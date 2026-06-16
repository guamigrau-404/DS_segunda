<?php 

    require __DIR__.'../../../coon/Banco.php';
    class Departamentos extends Banco{

        protected int $id;
        protected string $requisitante;
        protected DateTime $datahora;
        protected int $tipo; 
        protected int $id_departamento; 
        protected int $status; //1 - Ativo | 0 - Inativo
        protected DateTime $created_at;        
        protected DateTime $updated_at;
        protected DateTime $deleted_at;
        protected string $descricao;

        public function __construct(){
            $this->conectar();
        }
    }