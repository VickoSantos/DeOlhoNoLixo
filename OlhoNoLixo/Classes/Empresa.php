<?php
require_once 'Conn.php';

class Empresa
{
    
    private $cdEmpresa;
    private $nmEmpresa;
    private $nmTipoEmpresa;
    private $cdTelefoneEmpresa;
    private $nmEndereco;
    private $nmCidade;
    
    /*
     * Método construtor
     * Passa os valores recebidos para os atributos da classe, menos o código
     * ao instanciar o objeto da classe Empresa.
     * @param todos os atributos menos o código
     */
    public function __construct($nmEmpresa, $nmTipoEmpresa, 
            $cdTelefoneEmpresa, $nmEndereco, $nmCidade) 
    {
        $this->nmEmpresa=$nmEmpresa;
        $this->nmTipoEmpresa=$nmTipoEmpresa;
        $this->cdTelefoneEmpresa=$cdTelefoneEmpresa;
        $this->nmEndereco=$nmEndereco;
        $this->nmCidade=$nmCidade;
    }
    
    /*
     * Método cadastrarEmpresa()
     * Método void, retorna mensagem de erro se houver algum erro no 
     * banco de dados.
     */
    public function cadastrarEmpresa()
    {
        //Instancia um objeto do tipo Conn
        $conn = new Conn;
        $lastId = $conn->inserirEmpresa($this->nmEmpresa, 
                     $this->nmTipoEmpresa, $this->cdTelefoneEmpresa, 
                    $this->nmEndereco, $this->nmCidade);
        if($lastId !== 0){
            $this->cdEmpresa=$lastId;
        }else{
            echo "Erro no banco de dados.";
        }
    }
    
    /* Método que pesquisa as empresas de acordo com a cidade informada
     * @param Nome da cidade.
     * @return Um array de array contendo o(s) código(s) da empresa e
     * o(s) nome(s) da empresa.
     */
    public function pesquisarEmpresa($nmCidade){
        $conn = new Conn;
        $stmt = $conn->selectEmpresa($nmCidade);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function __get($atributo) {
        return $this->$atributo;
    }
    
    public function __set($atributo, $value) {
        $this->$atributo=$value;
    }
}