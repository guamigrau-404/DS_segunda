<?php
class usuario{
    protected int $id;
    protected string $nome;
    protected int $id_departamento;
    protected bool $eh_executor;
    protected bool $eh_cliente;
    protected string $email;
    protected string $nome_usuario;
    protected string $senha;
    protected DateTime $updated_at;
    protected DateTime $created_at;
    protected DateTime $deleted_at;
    protected string $status;

    public function setDados($id, $requisitante, $data_hora_requisicao, $tipo_solicitacao, $id_departamento, $detalhes, $status){
        $this->id = $id;
        $this->nome = $nome;
        $this->eh_executor = $eh_executor;
        $this->eh_cliente = $eh_cliente;
        $this->id_departamento = $id_departamento;
        $this->email = $email;
        $this->status = $status;
        $this->nome_usuario = $nome_usuario; 
        $this->senha = $senha;
    }

    public function getDadosUSER(){
         $dados = [
             "id"=>$this->id,
             "nome"=>$this->nome,
             "eh_executor"=>$this->eh_executor,
             "eh_cliente"=>$this->eh_cliente,
             "id_departamento"=>$this->id_departamento,
             "email"=>$this->email,
             "status"=>$this->status,
             "nome_usuario"=>$this->nome_usuario,
             "senha"=>$this->senha
         ];
        
         return $dados;
     }

     public function __construct(){
        $this->conectar();
     }
}