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
    <title>Cadastrar Fornecedor</title>
    <style type="text/css">
      a{
       color: #000;
      }

      a:hover {
       color: #000;
       text-decoration: none;
      }

    .form-login{
      width:200px;
      height:34px;
      padding:6px 12px;
      font-size:14px;
      color:#555;
      background-color:#fff;
      background-image:none;
      border:1px solid #ccc;
      border-radius:4px;
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
<div class="container-fluid">
        
      <div class="login col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1 container-fluid row content-row" 
      style="background: ; margin-top: 0px; height: 450px; padding: 0px;">
              <p align="center" style="margin-top: 30px;"><img src="img/ll.png"  
              width="250px" style=""></p>
          <form style="margin-top: 10px;">
            <input type="text" name="cnpj/cpf" placeholder="CNPJ/CPF" class="input form-control" 
            required="required">
            <input type="text" name="nome" placeholder="Razão Social/Nome" class="input form-control" 
            required="required">
            <input type="text" name="nome_fantasia" placeholder="Nome Fantasia" class="input form-control" 
            required="required">
            <input type="text" name="endereco" placeholder="Endereço" class="input form-control" 
            required="required">
            <input type="text" name="telefone" placeholder="Telefone" class="input form-control" 
            required="required">
            <input type="text" name="email" placeholder="Email" class="input form-control" 
            required="required">
            <input type="text" name="i_municipal" placeholder="Inscrição Municipal" class="input form-control" required="required">
            <select class="form-control input">
                <option>Categoria (Subgrupo de Despesa)</option>
            </select>
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