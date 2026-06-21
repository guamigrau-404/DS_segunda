<?php
class ordemServicos{
    protected int $id;
    protected usuario $requisitante;
    protected string $data_hora_requisicao;
    protected string $tipo_solicitacao;//queria um ENUM :(
    protected int $id_departamento;
    protected string $updated_at;
    protected string $created_at;
    protected string $deleted_at;
    protected string $detalhes;
    protected string $status;

    public function setDados($id, $requisitante, $data_hora_requisicao, $tipo_solicitacao, $id_departamento, $detalhes, $status){
        $this->id = $id;
        $this->requisitante = $requisitante;
        $this->data_hora_requisicao = $data_hora_requisicao;
        $this->tipo_solicitacao = $tipo_solicitacao;
        $this->id_departamento = $id_departamento;
        $this->detalhes = $detalhes;
        $this->status = $status;
        date_default_timezone_set('America/Sao_Paulo');
        $this->created_at = date('Y-m-d H:i:s'); 
    }

    public function getDadosOS(){
        $dados = [
            "id"=>$this->id,
            "requisitante"=>$this->requisitante,
            "data_hora_requisicao"=>$this->data_hora_requisicao,
            "tipo_solicitacao"=>$this->tipo_solicitacao,
            "id_departamento"=>$this->id_departamento,
            "detalhes"=>$this->detalhes,
            "status"=>$this->status
        ];
        
        return $dados;
    }
}
?>