<?php

class Ponto_Coleta {
    
    private $cdPontoColeta;
    private $nmPontoColeta;
    private $nmEndereco;
    private $nmCidade;
    private $cdTelefone;
    
    public function __construct($nmPontoColeta, $nmEndereco, 
            $nmCidade, $cdTelefone) 
    {
        $this->nmPontoColeta=$nmPontoColeta;
        $this->nmEndereco=$nmEndereco;
        $this->nmCidade=$nmCidade;
        $this->cdTelefone=$cdTelefone;
    }
    
    public function cadastrarPontoColeta()
    {
        $conn = new Conn;
        $lastId = $conn->inserirPonto($this->nmPontoColeta, $this->nmEndereco, 
                $this->nmCidade, $this->cdTelefone);
        if($lastId !== 0){
            $this->cdPontoColeta=$lastId;
        }else{
            echo "Erro no banco de dados.";
        }
    }
    
    public function pesquisarPontoColeta($nmCidade)
    {
        $conn = new Conn;
        $result = $conn->selectPontoColeta($nmCidade);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function __get($atributo) 
    {
        return $this->$atributo;
    }
    
    public function __set($atributo, $valor)
    {
        $this->$atributo=$valor;
    }
}