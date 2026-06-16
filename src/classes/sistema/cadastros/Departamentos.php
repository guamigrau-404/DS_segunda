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

        function setdados() {
            $this->id = $id;
            $this->nome = $nome;
            $this->id_lider = $lider_id;
            $this->status = $status;
            $this->criado_em = $created_at;
            $this->atualizado_em = $updated_at;
            $this->deletado_em = $deleted_at;
        }

        function getdados() {
            $dados = [
            "id"=>$this->id,
            "nome"=>$this->nome,
            "id lider"=>$this->id_lider,
            "status"=>$this->status,
            "data de criacao"=>$this->criado_em,
            "data de alteracao"=>$this->atualizado_em,
            "data de exclusao"=>$this->deletado_em
            ];
        }

        public function __construct(){
            $this->conectar();
        }
    }