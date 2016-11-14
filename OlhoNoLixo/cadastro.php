<!DOCTYPE html>
    <head>
       <meta charset=utf-8"/>
      <title>Olho no Lixo</title>
         <link rel="stylesheet" type="text/css" href="includes/style.css" />
    </head>
    <body>

       <div id="container">
         <?php include("includes/header.php");?>
          
        <div id="conteudo">
          
           <p align="center" style="font-size:19px"><b>Cadastre sua Empresa e Seja uma Empresa Amiga Do Meio Ambiente! </b>
          <table>
           <tr align="top">
               <td style="padding-left:190px;">
             <div align="center">
               <input type="image" src="images/olho2.jpg"></br> </br>
               <img src="images/reciclar.jpg" width="280" height="240" border="0">
             </div>
          </td>
          <td align="right" class="a" width="540" style="font-size:18px;padding-left:180px;">
          <form method="post" action=""/>
               <table width="530"align="right" border="0" height="570" cellpadding="0" cellspacing="0">

                 <tr>
                   <td align="left">
                      <label>Nome</label><label style="font-weight:bold;font-size:18px;color:black">*</label>
                   </td>
                   <td align="left">
                       <input type="text" name="nome" id="tnomeE" autofocus="autofocus" title="Preencha o nome!" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ -]+$" maxlength="150"size="40"  required tabindex="1"/></td>
                </tr>
                 <tr>
                   <td align="left">
                      <label>Endereço</label><label style="font-weight:bold;font-size:18px;color:black">*</label>
                   </td>
                   <td align="left">
                       <input type="text" name="nome" id="tend" autofocus="autofocus" title="Preencha o endereço!"  pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ -]+$" maxlength="150"size="40"  required tabindex="2"/></td>
                </tr>
                <tr>
                   <td align="left">
                      <label>Bairro</label><label style="font-weight:bold;font-size:18px;color:black">*</label>
                   </td>
                   <td align="left">
                       <input type="text" name="nome" id="tbairro" autofocus="autofocus"  title="Preencha o bairro!" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ -]+$" maxlength="150"size="40"  required tabindex="3"/></td>
                </tr>
                <tr>
                   <td align="left">
                      <label>Cidade</b></label><label style="font-weight:bold;font-size:18px;color:black">*</label>
                   </td>
                   <td align="left">
                      <select name="cidade" id="select2" tabindex="4"  title="Selecione a Cidade!" required width="30">
                                    <option selected value="">&nbsp;Selecionar</option>
                                    <option>Bertioga</option>
                                    <option>Cubatão</option>
                                    <option>Guarujá</option>
                                    <option>Itanhaém</option>
                                    <option>Mongaguá</option>
                                    <option>Peruíbe</option>
                                    <option>Praia Grande</option>
                                    <option>Santos</option>
                                    <option>São Vicente</option>
                       </select>
                   </td>
                </tr>
                <tr>
                   <td align="left">
                      <label>Telefone</label><label style="font-weight:bold;font-size:18px;color:black">*</label>
                   </td>
                   <td align="left">
                       <input type="text" name="nome" id="ttel" autofocus="autofocus"  title="Preencha o telefone!" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ -]+$" maxlength="150"size="40"  required tabindex="5"/>
                  </td>
                </tr>
                <tr>
                   <td align="left">
                      <label>E-mail</label><label style="font-weight:bold;font-size:18px;color:black">*</label>
                   </td>
                   <td align="left" >
                      <input type="email" name="email" id="email" size="40" required  title="Preencha o e-mail!"  maxlength="60"tabindex="6" />
                   </td>
                </tr>
                <tr>
                   <td align="left">
                      <label>Sou uma Empresa</b></label><label style="font-weight:bold;font-size:18px;color:black">*&nbsp;</label>
                   </td>
                   <td align="left">
                      <select name="tipoEmp" id="select2" tabindex="7"  title="Selecione o tipo de empresa!" required width="30">
                                    <option selected value="">&nbsp;Selecionar</option>
                                    <option>Coletora</option>
                                    <option>Produtora</option>
                                    <option>Recicladora</option>
                      </select>
                   </td>
                </tr>
                <tr>
                   <td align="left">
                      <label>Tipo de Lixo</b></label><label style="font-weight:bold;font-size:18px;color:black">*</label>
                   </td>
                   <td align="left">
                      <select name="tipoEmp" id="select2" tabindex="8"  title="Selecione o Tipo de Resíduo /Lixo!" required width="30">
                                    <option selected value="">&nbsp;Selecionar</option>
                                    <option>Plástico</option>
                                    <option>Papel</option>
                                    <option>Hospitalar</option>
                                    <option>Metal</option>
                                    <option>Químico</option>
                                    <option>Vidro</option>
                      </select>
                   </td>
                </tr>

                <tr>
                   <td colspan="2" align="right" style="padding-right:20px;">
                      <label style="font-weight:bold;font-size:18px;color:black">*</label>
                      <label style="font-size:14px">Campos Obrigatórios!</label>
                   </td>
                </tr>
                   </br></br>
                <tr>
                   <td colspan="2" align="center">
                     <input type="submit" name="enviar"id="btn" value="&nbsp Cadastrar &nbsp;" tabindex="9"/>
                   </td>
                </tr>
            </table>
        </form>
        </td>
      </tr>
        </table>

        </div> <!-- conteudo -->
      </div> <!-- container -->
        <div id='im' align="center">
          
        </div>
       <?php include("includes/footer.php");?>
   </body>
</html>

