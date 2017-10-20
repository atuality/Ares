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

      .bt_default {
        background-color: #F5874F;
        color: #fff;
      }

     .bt_default:hover {
        background-color: #E4763E;
        color: #fff;
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
                                         <li><a href="cad_sec.php">
                                            CAD. SECRETARIA
                                         </a></li>
                                         <li><a href="cad_ser.php">
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

    <div class="container-fluid">
        
      <!-- cadastrar secretaria   -->
      <div class="login col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1 container-fluid row content-row"
      style="background: ; margin-top: 0px; height: 450px; padding: 0px;">
              <h3 align="center">Cadastrar Secretaria</h3>
          <form style="margin-top: 10px;">
            <input type="text" name="ordenador" placeholder="Ordenador de Despesa" 
            class="input form-control" required="required"><br>
            <input type="text" name="gestor" placeholder="Gestor" class="input form-control" 
            required="required"><br>
            <input type="text" name="nome" placeholder="Nome" class="input form-control" 
            required="required"><br>
            <input type="text" name="sigla" placeholder="Sigla" class="input form-control" 
            required="required"><br>
            <input type="text" name="cnpj" placeholder="CNPJ" class="input form-control" 
            required="required"><br>
            <input type="text" name="endereco" placeholder="Endereço" class="input form-control" 
            required="required"><br>
            <input type="text" name="telefone" placeholder="Telefone" class="input form-control" 
            required="required"><br>
            <input type="text" name="email" placeholder="Email" class="input form-control" 
            required="required"><br>
            <div style="padding: 0px; margin-top: 10px;">
              <button type="submit" class="btn_entrar btn bt_default col-md-12 col-sm-12 col-xs-12">
                CADASTRAR
              </button>
            </div>
          </form>
        </div>
     </div>

</body>
</html>