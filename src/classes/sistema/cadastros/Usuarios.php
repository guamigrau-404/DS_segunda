<?php 

    require __DIR__.'../../../coon/Banco.php';
    class Departamentos extends Banco{

        protected int $id;
        protected string $nome;
        protected int $id_departamento;
        protected string $eh_executor;
        protected string $eh_cliente;
        protected string $email;
        protected string $nome_usuario;
        protected string $senha;
        protected int $status; //1 - Ativo | 0 - Inativo
        protected DateTime $created_at;        
        protected DateTime $updated_at;
        protected DateTime $deleted_at;

        public function __construct(){
            $this->conectar();
        }
    }