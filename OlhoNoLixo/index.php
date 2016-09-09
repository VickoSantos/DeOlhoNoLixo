<?php
session_start();
require_once 'Classes/Ponto_Coleta.php';
require_once 'Classes/Empresa.php';
require_once 'Classes/Login.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $nome = "Extra";
            $tipoEmpresa = "coletora";
            $telefone = "34956687";
            $endereco = "R.Carlos";
            $cidade = "Praia Grande";
            
            $empresa = new Empresa($nome, $tipoEmpresa, $telefone
                    , $endereco, $cidade);
            //$empresa->cadastrarEmpresa();
            //$result = $empresa->pesquisarEmpresa($cidade);
            
            $usuario = "VickoSantos";
            $senha = "12345";
            
            $login = new Login($usuario, $senha);
            //$login->cadastrarLogin($empresa->cdEmpresa);
            //$login->logar();
            //echo $_SESSION['cd_empresa']." ".$_SESSION['nm_empresa'];
            
            $ponto = new Ponto_Coleta($nome, $endereco, $cidade, $telefone);
            $ponto->cadastrarPontoColeta();
            echo $ponto->cdPontoColeta;
        ?>
    </body>
</html>
