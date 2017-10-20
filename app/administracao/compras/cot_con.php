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
    <title>Compras</title>
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
        width: 182px;
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
                            <a href="index.php">
                      CAIXA DE ENTRADA
                    </a>
                            </li>
                            <li class="opcao_menu"><a href="cadastrar_forn.php">CADASTRAR FORNECEDOR</a></li>
                    <li class="opcao_menu">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" href="#">
                      PESQUISAR <b class="caret"></b>
                    </a>
                              <ul class="dropdown-menu submenu-cx" role="menu">
                                   <li><a href="pesquisa_forn.php">
                                      Fornecedor
                                   </a></li>
                                   <li><a href="pes_item.php">
                                      Item
                                   </a></li>        
                                </ul>
                            </li>
                            <li class="opcao_menu" style="margin-right: 20px;">
                              <a href="configuracoes.php">
                                CONFIGURAÇÕES
                              </a>
                            </li>
                            <li class="opcao_menu" style="margin-right: 20px;">
                              <a href="../login_compras.php">
                                SAIR <span class="glyphicon glyphicon-log-out"></span>
                              </a>
                            </li>
                      <div class="btn-group bold">
                           <a href="cotacao.php">
                           <button type="button" class="btn btn-inverse" aria-expanded="false" style="margin-top: 7px; margin-right: 30px">
                                  <b> SOLICITAR COTAÇÃO </b>  
                           </button>
                           </a>   
                      </div>
                            </li>
                        </ul>
                    </div>
                </nav>
        </div>
</section>
<section class="col-md-10 col-md-offset-1" style=" padding: 0px; background: #fff; height: 330px; margin-top: 10px;">
  <a href="index.php"><button class="desativado btn">Solicitações Recebidas</button></a>
  <a href="cot_and.php"><button class="desativado btn">Cotações em Andamento</button></a>
  <a href="#"><button class="active btn">Cotações Concluidas</button></a>
  <div class="col-md-12" style="height: 500px; border: 2px solid silver; overflow-x: hidden;">
      <br><h3 class="modal-title" align="center">COTAÇÕES CONCLUIDAS</h3><br>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="row">
              <div class="form-group col-md-2">
                 <label for="solicitacao">Nº Cotação:</label>
                 <input type="text" class="form-control" id="solicitacao" name="solicitacao">
             </div>
             <div class="form-group col-md-2">
                 <label for="solicitacao">Tipo:</label>
                 <input type="text" class="form-control" id="tipo" name="tipo">
             </div>
             <div class="form-group col-md-2">
                 <label for="data">Data:</label>
                 <input type="date" class="form-control" name="data" id="data">
             </div>
             <div class="form-group col-md-2">
             <label for="apuracao">Visivel:</label>
                 <select class="form-control" name="apuracao" id="apuracao">
                    <option>Sim</option>
                    <option>Não</option>
                 </select>
             </div>
             <div class="form-group col-md-2">
                 <label for="solicitacao">Nº Solicitação:</label>
                 <input type="text" class="form-control" id="secretaria" name="secretaria">
             </div>
             <div class="form-group col-md-2">
                 <label for="solicitacao">Secretaria:</label>
                 <input type="text" class="form-control" id="cotacao" name="cotacao">
             </div>
             <div class="btn-group bold col-md-2">
                 <input type="submit" class="form-control" name="pesquisar" id="pesquiar" 
                 value="PESQUISAR" style="background: silver; font-weight: bold; color: black;"> 
             </div>
         </div>
      </form>
      <table class="table table-striped" cellspacing="0" cellpadding="0">
      <thead>
          <tr>
              <th>Nº</th>
              <th>TIPO</th>
              <th>DATA</th>
              <th>VISIVEL</th>
              <th>Nº SOLICITAÇÃO</th>
              <th>SECRETARIA</th>
              <th class="actions">AÇÕES</th>
           </tr>
      </thead>
      <tbody>
          <tr>
          <td>1306.001/2017</td>
          <td>--------</td>
          <td>13/06/2017</td>
          <td>--------</td>
          <td>--------</td>
          <td>--------</td>
          <td class='actions'>
            <a class='btn btn-info btn-xs'>Ver detalhado</a>
              <a class='btn btn-primary btn-xs'>Apurar</a>
              <a class='btn btn-warning btn-xs'>Imprimir</a>
          </td>
      </tr>
    </tbody>
  </table>
  </div>
</section>
</body>
</html>