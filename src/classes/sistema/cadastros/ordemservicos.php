<?php

//require __DIR__.'../../../coon/Banco.php';
class ordemservicos extends Banco{

    protected int $codigo;
    protected string $requisitante;
    protected DateTime $data_hora;
    protected string $solicitacao;
    protected int $id_departamento;
    protected DateTime $ultima_alteracao;
    protected DateTime $criacao;
    protected DateTime $delecao;
    protected string $solicitacao;
    protected int $status;

    public function Ordemservico($codigo, $requisitante, $data_hora, $solicitacao, $id_departamento, $ultima_alteracao, $criacao, $delecao, $solicitacao, $status ){
        $this->codigo = $codigo;
        $this->requisitante = $requisitante;
        $this->data_hora = $data_hora;
        $this->solicitacao = $solicitacao;
        $this->id_departamento = $id_departamento;
        $this->ultima_alteracao = $ultima_alteracao;
        $this->criacao = $criacao;
        $this->delecao = $delecao;
        $this->solicitacao= $solicitacao;
        $this->status = $status;
        
        
    }

}
 

        public function getDados(){
            $dados = [
                "codigo"=>$this->codigo,
                "requisitante"=>$this->requisitante,
                "requisitante"=>$this->data_hora,
                $this->solicitacao,
                $this->id_departamento,
                $this->ultima_alteracao,
                $this->criacao,
                $this->delecao,
                $this->solicitacao,
                $this->status,
            ];

            return $dados;
        }

        public function getVida(){
            return $this->vida;
        }

        public function getHistamin(){
            return $this->histamin;
        }

        public function setVida(float $newVida) :void{
            $this->vida = $newVida;
        }
    }