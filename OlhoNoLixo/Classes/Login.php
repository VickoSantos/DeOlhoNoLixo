<?php
require_once 'Conn.php';

class Login 
{
    private $nmLogin;
    private $nmSenhaLogin;
    
    public function __construct($nmLogin, $nmSenhaLogin)
    {
        $this->nmLogin=$nmLogin;
        $this->nmSenhaLogin=$nmSenhaLogin;
    }
    
    /*
     * Método para cadastrar a empresa, utiliza o método da classe Conn.
     * 
     * @param Código da empresa.
     * @return Em caso de erro, retorna mensagem informando ao usuário.
     */
    public function cadastrarLogin($cdEmpresa)
    {
        $conn = new Conn;
        $result = $conn->inserirLogin($this->nmLogin, $this->nmSenhaLogin, $cdEmpresa);
        if($result->rowCount() == 0){
            echo "Erro no banco de dados.";
        }
    }
    
    /*
     * Método utilizado para logar.
     * 
     * @param login e senha (pelo construtor da classe).
     * @return Em caso de sucesso retorna 1, atribuindo o código da empresa
     * e o nome da empresa para a sessão. Em caso de falha retorna 0.
     */
    public function logar()
    {
        $conn = new Conn;
        $stmt = $conn->selectLogin($this->nmLogin, $this->nmSenhaLogin);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($result) !== 0){
            for($i=0; $i<count($result); $i++){
                $_SESSION['cd_empresa'] = $result[$i]['cd_empresa'];
                $_SESSION['nm_empresa'] = $result[$i]['nm_empresa'];
            }
            return 1;
        }else{
            return 0;
        }
    }
    
    
}