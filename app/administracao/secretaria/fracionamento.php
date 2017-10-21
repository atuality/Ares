<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../assets/img/logo_jr.png" type="image/x-icon">  
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/estilo.css">
    <script src="../../assets/js/jquery.js" type="text/javascript"></script>
    <script src="../../assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <title>Unidade Gestora</title>
    <style type="">
        .rf{
            height: 60px;
        }

        .frac{
            margin-top: 30px;
        }

        .saldo{
            font-size: 15pt;
        }

        #botao{
            -webkit-transition: 1s all ease; /* É para pega no Chrome e Safira */
            -moz-transition: 1s all ease; /* Firefox */
            -o-transition: 1s all ease; /* Opera */
        }

        #botao:hover{
            -moz-transform: scale(1.5);
            -webkit-transform: scale(1.5);
            -o-transform: scale(1.5);
        }
    </style>
</head>
<body>
     <section id="menu" class="row">
            <div class="col-md-12">
                    <nav class="navbar navbar-default navbar-fixed-top" id="nav-superior">
                        <div class="navbar-header">
                        <a class="navbar-brand" href="#"><img src="../../assets/img/logomarca.png" 
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
                                    <a href="index.php">SOLICITAÇÕES</a>
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
    <section class="col-md-10 col-md-offset-1" style="padding: 0px; margin-top: 10px;">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="row">
                 <div class="form-group col-md-6">
                     <label for="data">CPF/CNPJ:</label>
                     <input type="text" class="form-control" name="data" id="data">
                 </div>
                 <div class="form-group col-md-6">
                     <label for="subelemento">Subelemento:</label>
                     <select class="form-control" name="subelemento" id="subelemento">
                        <option>---------</option>
                     </select>
                 </div>
              </div>
          </form>
    </section>
    <section class="col-md-7 col-md-offset-1" style=" background: #fff; height: 350px; margin-top: 10px; border: 2px solid silver; overflow-x: hidden;">

            <table class="table table-striped" cellspacing="0" cellpadding="0" 
                 style="border-bottom: 2px solid green; ">
                   <thead>
                        <tr>
                            <th>DATA</th>
                            <th>FORNECEDOR</th>
                            <th>OBJETO</th>
                            <th>SUBELEMENTO</th>
                            <th>VALOR</th>
                         </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>--------</td>
                          <td>--------</td>
                          <td>--------</td>
                          <td>--------</td>
                          <td>--------</td>
                        </tr>
                  </tbody>
              </table>

    </section>

    <section class="col-md-2 col-md-offset-1" style=" height: 350px; margin-top: 10px; padding: 0px;">
            <div id="actions" class="row" style="float: ;">
              <div class="col-md-12">
                  <label for="subelemento" class="frac">Subelemento:</label><br>
                  <button type="submit" class="btn btn-success col-md-12 rf">Risco de Fracionamento
                        <span class="badge">0</span>
                  </button>
                  <label for="Fornecedor" class="frac">Fornecedor:</label>
                  <button type="submit" class="btn btn-success col-md-12 rf">Risco de Fracionamento
                        <span class="badge">0</span>
                  </button>
                  <section class="col-md-12" style="margin-top: 40px; padding: 0px;">
                        <label for="total" class="saldo">TOTAL: R$</label><br>
                        <label for="saldo" class="saldo">SALDO: R$</label>
                  </section>
              </div>
          </div>
    </section>

    <section id="vg" style="height: 450px; border: 2px solid silver; overflow-x: hidden; margin-top: 10px;" class="col-md-offset-1 col-md-10">
          <div id="actions" class="row" style="float: ; margin-top: 20px;">
              <div class="col-md-12">
                  <button type="submit" class="btn col-md-12">
                      Mat. Expediente - 33803016 - R$ 7.500.00 - R$ 500.00
                  </button>
              </div>
          </div>
          <div id="actions" class="row" style="float: ; margin-top: 20px;">
              <div class="col-md-12">
                  <button type="submit" class="btn col-md-12">
                      Mat. Limpeza - 33903022 - R$ 6.500.00 - R$ 1.500.00
                  </button>
              </div>
          </div>
    </section>
</body>
</html>