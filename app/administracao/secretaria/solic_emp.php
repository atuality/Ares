<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo_jr.png" type="image/x-icon">  
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <title>Unidade Gestora</title>
    <style type="text/css">

      a{
       color: #000;
      }

      a:hover {
       color: #000;
       text-decoration: none;
      }

    	.submenu-cx{
    		background: ;
    		width: 102px;
    		padding: 0px;
    	}

      .submenu-cad{
        background: ;
        width: 60px;
        padding: 0px;
      }

    	.active{
        background: #f0f0f0;
        font-family: serif;
        font-size: 14pt;
      }

      .desative{
        background: #a0a0a0;
        font-family: serif;
        font-size: 14pt;
        margin-left: -3px;
      }

      #dados_credor{
        margin-top: 50px;
      }
	</style>
</head>
<body>
	
<section id="menu" class="row">
            <div class="col-md-12">
                    <nav class="navbar navbar-default navbar-fixed-top" id="nav-superior">
                        <div class="navbar-header">
                        <a class="navbar-brand" href="#"><img src="img/logomarca.png" 
                         width="200px" style="margin-top: -20px;" alt="logotipo do site"></a>
                        
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#barraSuperior">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>  
                        <div class="collapse navbar-collapse" id="barraSuperior">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="opcao_menu">
                                    <a href="index.php">NOVA SOLICITAÇÃO</a>
                                </li>
                                <li class="opcao_menu">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        CONTROLE <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu submenu-cx" role="menu">
                                         <li><a href="fracionamento.php">
                                            FRACIONAMENTO
                                         </a></li>
                                         <li><a href="empenho.php">
                                            EMPENHO
                                         </a></li>        
                                      </ul>
                                </li>
                                <li class="opcao_menu">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        CONFIGURAÇÃO <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu submenu-cx" role="menu">
                                         <li><a href="config/cad_sec.php">
                                            CAD. SECRETARIA
                                         </a></li>
                                         <li><a href="config/cad_ser.php">
                                            CAD. SERVIDOR
                                         </a></li>        
                                      </ul>
                                </li>
                                <li class="opcao_menu" style="margin-right: 50px;">
                                  <a href="../login_secretaria.php">
                                    SAIR <span class="glyphicon glyphicon-log-out"></span>
                                  </a>
                                </li>
                               </li>
                            </ul>
                        </div>
                    </nav>
            </div>
    </section>
<section class="col-md-10 col-md-offset-1" style=" background: #fff; height: 550px; margin-top: 10px; border: 2px solid silver; overflow-x: hidden;">
    <br><h3 class="modal-title" align="center">SOLICITAÇÃO DE EMPENHO</h3><br>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="row">
              <div class="form-group col-md-3">
                 <label for="n_solicitacao">Nº Solicitação:</label>
                 <input type="text" class="form-control" disabled="" id="solicitacao" name="solicitacao">
              </div>
              <div class="form-group col-md-3">
                 <label for="data">Data:</label>
                 <input type="date" class="form-control" name="data" id="data">
              </div>
              <div class="form-group col-md-3">
                 <label for="registro">Tipo de Empenho:</label>
                 <select class="form-control" name="registro" id="registro">
                    <option>Global</option>
                    <option>Estimativo</option>
                    <option>Ordinário</option>
                 </select>
             </div>
              <div class="form-group col-md-3" style="padding: 0px;">
                 <label for="registro">Dados do Credor:</label>
                 <div class="col-md-12">
                    <a href="#" data-toggle="modal" data-target="#dados_credor" class="btn btn-primary col-md-12">DADOS DO CREDOR</a>
                 </div>
             </div>
             <div class="form-group col-md-3">
                 <label for="registro">Unidade Orçamentaria:</label>
                 <select class="form-control" name="registro" id="registro">
                    <option>--------</option>
                 </select>
             </div>
             <div class="form-group col-md-3">
                 <label for="registro">Prog. Orçamento:</label>
                 <select class="form-control" name="registro" id="registro">
                    <option>--------</option>
                 </select>
             </div>
             <div class="form-group col-md-3">
                 <label for="data">Banco:</label>
                 <input type="text" class="form-control" name="data" id="data">
             </div>
             <div class="form-group col-md-3">
                 <label for="data">Agência:</label>
                 <input type="text" class="form-control" name="data" id="data">
             </div>
             <div class="form-group col-md-3">
                 <label for="data">Conta Corrente:</label>
                 <input type="text" class="form-control" name="data" id="data">
             </div>
             <div class="form-group col-md-3">
                 <label for="elemento_despesa">Fonte de Recurso:</label>
                 <select class="form-control" name="elemento_despesa" id="elemento_despesa">
                    <option>--------</option>
                 </select>
             </div>
             <div class="form-group col-md-3">
                 <label for="subelemento">Tipo de Contratação:</label>
                 <select class="form-control" name="subelemento" id="subelemento">
                    <option>---------</option>
                 </select>
             </div>
             <div class="form-group col-md-3" style="padding: 0px;">
                 <label for="visivel">&nbsp;</label><br>
                 <div class="col-md-12">
                    <a href="#" data-toggle="modal" data-target="#descriminacao" class="btn btn-primary col-md-12">DESCRIMINAÇÃO DE ITENS</a>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="form-group col-md-12">
                  <label>Historico de Empenho:</label>
                  <textarea rows="4" cols="100" class="form-control" id="objeto" name="objeto">
                  </textarea>
             </div>
         </div>
      <div id="actions" class="row" style="float: ;">
          <div class="col-md-12">
              <button type="submit" class="btn btn-success">FINALIZAR SOLICITAÇÃO DE EMPENHO</button>
              <button type="reset" class="btn btn-danger">CANCELAR</button>
          </div>
      </div>
      </form>
</section>



<!-- modal para dados do credor -->
<section class="row modal fade" id="dados_credor">
    <section class="row">
    <div class="col-md-10 col-md-offset-1" style="background: #fff; margin-top: 10px; height: 500px; 
    border: 2px solid silver; overflow-x: hidden;">
      <div class="modal-header col-md-10 col-md-offset-1">
        <form>
          <div class="form-group col-md-4">
             <div class="col-md-12">
                <a href="#" data-toggle="modal" data-target="#sub" class="btn btn-primary col-md-12">SUBELEMENTO</a>
             </div>
          </div>
          <div class="form-group col-md-4">
             <select class="form-control" name="elemento_despesa" id="elemento_despesa">
                <option >CNPJ/CPF</option>
                <option>RAZÃO SOCIAL</option>
                <option>NOME FANTASIA</option>
             </select>
          </div>
          <div class="form-group col-md-4">
               <input type="text" class="form-control" placeholder="Pesquisar" name="pesquisa" id="pesquisa">
          </div>
        </form>    
      </div>
      <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>CNPJ/CPF</th>
                    <th>RAZÃO SOCIAL/NOME</th>
                    <th>ENDEREÇO</th>
                    <th>TELEFONE</th>
                    <th>EMAIL</th>
                 </tr>
            </thead>
            <tbody>
                <tr>
                    <td>056.345.343-23</td>
                    <td>Clarinda do Cheiro Verde</td>
                    <td>Do lado do coisa</td>
                    <td>(88)96666-6666</td>
                    <td>clarindacv@gmail.com</td>
                </tr>
          </tbody>
      </table>
    </div>
</section>

<!-- submodal para subelementos do credor -->
<section class="row modal wer fade" id="sub">
    <div class="col-md-4 col-md-offset-4" style="background: #f8f8f8; margin-top: 50px; height: 300px;overflow-x: hidden; border: 2px solid black">
      <form style="margin-top: 10px;">
        <input type="text" placeholder="Pesquisa" class="form-control">
      </form>
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>SUBELEMENTO</th>
                    <th>CODIGO</th>
                    <th>AÇÃO</th>
                 </tr>
            </thead>
            <tbody>
                <tr>
              <td>Material Expediente</td>
              <td>33039371</td>
              <td>
                <input type="checkbox" name="selecionar" value="selecionar">
              </td>
          </tr>
          <tr>
              <td>Material de Limpeza</td>
              <td>33039371</td>
              <td>
                <input type="checkbox" name="selecionar" value="selecionar">
              </td>
          </tr>
          <tr>
              <td>Material Higiene</td>
              <td>33039371</td>
              <td>
                <input type="checkbox" name="selecionar" value="selecionar">
              </td>
          </tr>
          <tr>
              <td>Material Não sei oque</td>
              <td>33039371</td>
              <td>
                <input type="checkbox" name="selecionar" value="selecionar">
              </td>
          </tr>
          </tbody>
      </table>
      <button type="button" class="btn btn-inverse" class="close" data-dismiss="wer"
        style="float: right; margin-bottom: 10px;">
                <b> Concluir </b><br>
      </button>
    </div>
</section>
</section>

<!-- modal para empenho com descriminação -->
<section class="row modal wer fade" id="descriminacao">
     <div class="col-md-4 col-md-offset-4" style="background: #f8f8f8; margin-top: 50px; height: 300px;overflow-x: hidden; border: 2px solid black; padding: 0px;">
         <table class="table table-striped" cellspacing="0" cellpadding="0" 
             style="border-bottom: 2px solid green; ">
               <thead>
                    <tr>
                        <th>CÓDIGO</th>
                        <th>ITEM</th>
                        <th>QUANTDADE</th>
                        <th>VALOR UNITARIO</th>
                     </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>--------</td>
                      <td>Arroz</td>
                      <td>10</td>
                      <td>10</td>
                    </tr>
              </tbody>
          </table>
          <div class="form-group col-md-6" style="float: right;">
                 <div class="col-md-12">
                    <a href="#" data-toggle="modal" data-target="#descriminacao"  class="btn btn-primary col-md-12">IMPORTAR</a>
                 </div>
          </div>
      </div>
</section>
</body>
</html>