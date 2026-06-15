<?php 

    require __DIR__.'../../../coon/Banco.php';
    class Departamentos extends Banco{

        protected int $id;
        protected string $nome;
        protected int $lider_id;
        protected int $status; //1 - Ativo | 0 - Inativo
        protected DateTime $created_at;        
        protected DateTime $updated_at;
        protected DateTime $deleted_at;

        public function __construct(){
            $this->conectar();
        }
    }