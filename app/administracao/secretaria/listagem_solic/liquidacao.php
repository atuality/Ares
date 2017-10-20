<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/logo_jr.png" type="image/x-icon">  
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
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
                        <a class="navbar-brand" href="#"><img src="../img/logomarca.png" 
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
                                    <a href="../index.php">NOVA SOLICITAÇÃO</a>
                                </li>
                                <li class="opcao_menu">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        CONTROLE <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu submenu-cx" role="menu">
                                         <li><a href="../fracionamento.php">
                                            FRACIONAMENTO
                                         </a></li>
                                         <li><a href="../empenho.php">
                                            EMPENHO
                                         </a></li>        
                                      </ul>
                                </li>
                                <li class="opcao_menu">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        CONFIGURAÇÃO <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu submenu-cx" role="menu">
                                         <li><a href="../config/cad_sec.php">
                                            CAD. SECRETARIA
                                         </a></li>
                                         <li><a href="../config/cad_ser.php">
                                            CAD. SERVIDOR
                                         </a></li>        
                                      </ul>
                                </li>
                                <li class="opcao_menu" style="margin-right: 50px;">
                                  <a href="../../login_secretaria.php">
                                    SAIR <span class="glyphicon glyphicon-log-out"></span>
                                  </a>
                                </li>
                               </li>
                            </ul>
                        </div>
                    </nav>
            </div>
    </section>
<section class="col-md-10 col-md-offset-1" style=" padding: 0px; background: #fff; height: 500px; margin-top: 10px;">
  <a href="../index.php"><button class="desativado btn">Solicitação de Despesa</button></a>
  <a href="empenho.php">
  		  <button class="desativado btn">Solicitação de Empenho</button>
  </a>
  <a href="liquidacao.php"><button class="active btn">Solicitação de Liquidação</button></a>
  <div class="col-md-12" style="height: 500px; border: 2px solid silver; overflow-x: hidden;">
      <br><h3 class="modal-title" align="center">PROCURAR POR SOLICITAÇÕES FEITAS</h3>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="row">
              <div class="form-group col-md-3">
                 <label for="solicitacao">Nº Solicitação:</label>
                 <input type="text" class="form-control" id="solicitacao" name="solicitacao">
             </div>
             <div class="form-group col-md-3">
                 <label for="solicitacao">Nota Fiscal:</label>
                 <input type="text" class="form-control" id="secretaria" name="secretaria">
             </div>
             <div class="form-group col-md-3">
                 <label for="solicitacao">Nº de Empenho:</label>
                 <input type="text" class="form-control" id="tipo" name="tipo">
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
             <div class="form-group col-md-3" style="padding: 0px;">
                 <label for="visivel">&nbsp;</label><br>
                 <div class="col-md-12">
                    <a href="../solic_liq" class="btn btn-primary col-md-12">NOVA SOLIC. DE LIQUIDAÇÃO</a>
             </div>
         </div>
      </form>
      <table class="table table-striped" cellspacing="0" cellpadding="0" 
      style="border-bottom: 2px solid green; ">
            <thead>
                <tr>
                    <th>Nº</th>
                    <th>NOTA FISCAL</th>
                    <th>Nº DE EMPENHO</th>
                    <th>DATA</th>
                    <th>MÊS/ANO</th>
                    <th class="actions">AÇÕES</th>
                 </tr>
            </thead>
            <tbody>
                 <tr>
                    <td>1306.001/2017</td>
                    <td>SEDETE</td>
                    <td>MAT. EXP.</td>
                    <td>13/06/2017</td>
                    <td>--------</td>
                    <td class='actions'>
                        <a class='btn btn-info btn-xs'>Ver detalhado</a>
                    </td>
                 </tr>
            </tbody>
        </table>
      </div>
    </section>
</body>
</html>