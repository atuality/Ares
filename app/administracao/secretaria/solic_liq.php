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
    <br><h3 class="modal-title" align="center">SOLICITAÇÃO DE LIQUIDAÇÃO</h3><br>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="row">
              <div class="form-group col-md-4">
                 <label for="n_solicitacao">Nº Solicitação:</label>
                 <input type="text" class="form-control" disabled="" id="solicitacao" name="solicitacao">
              </div>
             <div class="form-group col-md-4">
                 <label for="solicitacao_emp">Nº Solicitação de Empenho:</label>
                 <input type="text" class="form-control" id="solicitacao" name="solicitacao">
             </div>
             <div class="form-group col-md-4">
                 <label for="visivel">&nbsp;</label><br>
                 <div class="col-md-12">
                    <a href="#" data-toggle="modal" data-target="#descriminacao"  class="btn btn-primary col-md-12">PROCURAR</a>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="form-group col-md-3">
                 <label for="nota_fiscal">Nota Fiscal:</label>
                 <input type="text" class="form-control" id="nota_fiscal" name="nota_fiscal">
             </div>
             <div class="form-group col-md-3">
                 <label for="data">Data:</label>
                 <input type="date" class="form-control" name="data" id="data">
             </div>
             <div class="form-group col-md-3">
                 <label for="mes/ano">Mês/Ano:</label>
                 <input type="text" class="form-control" id="mes/ano" placeholder="xx/20xx" 
                 name="mes/ano">
             </div>
             <div class="form-group col-md-3">
                 <label for="n_empenho">Nº Empenho:</label>
                 <input type="text" class="form-control" id="n_empenho" name="n_empenho">
             </div>
         </div>
         <div class="row">
             <div class="form-group col-md-12">
                  <label>Historico:</label>
                  <textarea rows="4" cols="50" class="form-control" id="historico" name="historico">
                  </textarea>
             </div>
         </div>
         <label>Itens:</label>
         <table class="table table-striped" cellspacing="0" cellpadding="0" 
         style="border-bottom: 2px solid green; ">
           <thead>
                <tr>
                    <th>CODIGO</th>
                    <th>ITEM</th>
                    <th>QUANTIDADE</th>
                    <th>VALOR UNITARIO</th>
                    <th>VALOR TOTAL</th>
                    <th>SELECIONAR</th>
                 </tr>
            </thead>
            <tbody>
                <tr>
                  <td>--------</td>
                  <td>--------</td>
                  <td>
                    <input type="number" name="quantity" min="1" max="1000">
                  </td>
                  <td>--------</td>
                  <td>--------</td>
                  <td>
                    <input type="checkbox" name="selecionar">
                  </td>
                </tr>
          </tbody>
        </table>
      <div id="actions" class="row" style="float: right;">
          <div class="col-md-12">
              <button type="submit" class="btn">TOTAL GLOBAL (R$)</button>
          </div>
      </div>
      <div id="actions" class="row" style="float: ;">
          <div class="col-md-12">
              <button type="submit" class="btn btn-success">FINALIZAR SOLICITAÇÃO DE LIQUIDAÇÃO</button>
              <button type="reset" class="btn btn-danger">CANCELAR</button>
          </div>
      </div>
      </form>
</section>
</body>
</html>