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
    </style>
    <script type="text/javascript">
            $(function(){
              $("#lvg").click(function (event) {
                event.preventDefault();
                var idElemento = $(this).attr("href");
                var deslocamento = $(idElemento).offset().top;
                $('html, body').animate({ scrollTop: deslocamento }, 'slow');
              });
            });
    </script>
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
        <br><h3 class="modal-title" align="center">CONTROLE DE EMPENHO</h3><br>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="row">
                  <div class="form-group col-md-3">
                     <label for="n_empenho">Nº Empenho:</label>
                     <input type="text" class="form-control" id="solicitacao" name="solicitacao">
                 </div>
                 <div class="form-group col-md-3">
                     <label for="secretaria">Secretaria:</label>
                     <select class="form-control" name="secretaria" id="secretaria">
                        <option>--------</option>
                     </select>
                 </div>
                 <div class="form-group col-md-3">
                     <label for="data">Data:</label>
                     <input type="date" class="form-control" name="data" id="data">
                 </div>
                 <div class="form-group col-md-3">
                     <label for="subelemento">Subelemento:</label>
                     <select class="form-control" name="subelemento" id="subelemento">
                        <option>--------</option>
                     </select>
                 </div>
             </div>
             <label>Itens:</label>
             <table class="table table-striped" cellspacing="0" cellpadding="0" 
             style="border-bottom: 2px solid green; ">
               <thead>
                    <tr>
                        <th>Nº DE EMPENHO</th>
                        <th>DATA</th>
                        <th>SECRETARIA</th>
                        <th>SUBELEMENTO</th>
                        <th>VALOR</th>
                        <th>SALDO</th>
                        <th>AÇÃO</th>
                     </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>--------</td>
                      <td>--------</td>
                      <td>--------</td>
                      <td>--------</td>
                      <td>--------</td>
                      <td>--------</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#detalhe" class='btn btn-info btn-xs'>
                            Ver detalhado
                        </a>
                      </td>
                    </tr>
              </tbody>
            </table>
          </form>
    </section>

    <section class="row modal wer fade" id="detalhe">
         <div class="col-md-4 col-md-offset-4" style="background: #f8f8f8; margin-top: 50px; height: 300px;overflow-x: hidden; border: 2px solid black; padding: 0px;">
             <label for="liquidacao">EMPENHO:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <label for="liquidacao">SALDO: R$</label><br>
             <label for="liquidacao">LIQUIDAÇÃO:</label><br>
             <table class="table table-striped" cellspacing="0" cellpadding="0" 
                 style="border-bottom: 2px solid green; ">
                   <thead>
                        <tr>
                            <th>Nº</th>
                            <th>DATA</th>
                            <th>VALOR</th>
                         </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>--------</td>
                          <td>--------</td>
                          <td>--------</td>
                        </tr>
                  </tbody>
              </table>
          </div>
      </section>
</body>
</html>