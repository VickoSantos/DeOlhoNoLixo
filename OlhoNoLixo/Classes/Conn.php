<?php

class Conn
{
    
    /*
     * Método que instancia um objeto PDO
     * @param local e nome do banco
     * @param2 nome do usuário
     * @param3 senha
     */
    public function dbCon(){
        return new PDO("mysql:host=localhost;dbname=db_onl", "root", "");
    }
    
    /*
     * Método que insere os dados da empresa no banco de dados.
     * @param nome, tipo, telefone, endereco e cidade.
     * 
     * Envia os dados através de um PDO Statement
     * Verifica se a quantidade de linhas retornadas é diferente de 0.
     * @return Em caso de sucesso retorna o valor do código da empresa,
     * se falhar retorna 0. 
     */
    public function inserirEmpresa($nmEmpresa, $nmTipoEmpresa, 
    $cdTelefoneEmpresa, $nmEndereco, $nmCidade)
    {
        $db = $this->dbCon();
        $stmt = $db->prepare("INSERT INTO empresa (nm_empresa, nm_tipo_empresa,"
                . "cd_telefone_empresa, nm_endereco, nm_cidade) "
                . "VALUES (?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $nmEmpresa);
        $stmt->bindParam(2, $nmTipoEmpresa);
        $stmt->bindParam(3, $cdTelefoneEmpresa);
        $stmt->bindParam(4, $nmEndereco);
        $stmt->bindParam(5, $nmCidade);
        $stmt->execute();
        if($stmt->rowCount() !== 0){
            return $db->lastInsertId();
        }else{
            return 0;
        }
    }
    
    /*
     * Método que seleciona o códido e o nome da empresa de acordo
     * com a cidade informada.
     * Utilizado para pesquisar a cidade.
     * @param nome da cidade;
     * @return Objeto PDOStatement.
     */
    public function selectEmpresa($nmCidade)
    {
        $db = $this->dbCon();
        $stmt = $db->prepare("SELECT cd_empresa, nm_empresa FROM empresa "
                . "WHERE nm_cidade = ? ");
        $stmt->bindParam(1, $nmCidade);
        $stmt->execute();
        return $stmt;
    }
    
    /*
     * Método que insere os dados de login no banco.
     * @param login, senha e código da empresa.
     * @returm Objeto PDO Statement.
     */
    public function inserirLogin($nmLogin, $nmSenhaLogin, $cdEmpresa)
    {
        $db = $this->dbCon();
        $stmt = $db->prepare("INSERT INTO login (nm_login, nm_senha_login, "
                . "cd_empresa) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $nmLogin);
        $stmt->bindParam(2, $nmSenhaLogin);
        $stmt->bindParam(3, $cdEmpresa);
        $stmt->execute();
        return $stmt;
    }
    
    /*
     * Método que seleciona o código e nome da empresa de acordo com 
     * login e a senha informados.
     * Utilizado para fazer login.
     * 
     * @param login e senha.
     * @return Objeto PDOStatement.
     */
    public function selectLogin($nmLogin, $nmSenhaLogin)
    {
        $db = $this->dbCon();
        $stmt = $db->prepare("SELECT e.cd_empresa, e.nm_empresa FROM empresa e, "
                . "login l WHERE e.cd_empresa = l.cd_empresa "
                . "AND l.nm_login = ? AND l.nm_senha_login = ? ");
        $stmt->bindParam(1, $nmLogin);
        $stmt->bindParam(2, $nmSenhaLogin);
        $stmt->execute();
        return $stmt;
    }
    
    public function inserirPonto($nmPontoColeta, $nmEndereco, $nmCidade, 
            $cdTelefone)
    {
        $db = $this->dbCon();
        $stmt = $db->prepare("INSERT INTO ponto_coleta (nm_ponto_coleta, "
                . "nm_endereco_ponto_coleta, cd_telefone_ponto_coleta, "
                . "nm_cidade_ponto_coleta) "
                . "VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $nmPontoColeta);
        $stmt->bindParam(2, $nmEndereco);
        $stmt->bindParam(3, $nmCidade);
        $stmt->bindParam(4, $cdTelefone);
        $stmt->execute();
        if($stmt->rowCount() !== 0){
            return $db->lastInsertId();
        }else{
            return 0;
        }
    }
    
    public function selectPontoColeta($nmCidade)
    {
        $db = $this->dbCon();
        $stmt = $db->prepare("SELECT cd_ponto_coleta, nm_ponto_coleta "
                . "FROM ponto_coleta WHERE nm_cidade = ?");
        $stmt->bindParam(1, $nmCidade);
        $stmt->execute();
        return $stmt;
    }
}