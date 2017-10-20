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
    <title>Iniciar Cotação</title>
    <style type="text/css">

      a{
       color: #000;
      }

      a:hover {
       color: #000;
       text-decoration: none;
      }

    .form-text{
      width:140px;
      height:30px;
      padding:6px 12px;
      font-size:12pt;
      color:#555;
      background-color:#fff;
      border:1px solid #ccc;
      border-radius:4px;
    }

    .form-date{
      width:165px;
      height:30px;
      padding:6px 12px;
      font-size:12pt;
      color:#555;
      background-color:#fff;
      border:1px solid #ccc;
      border-radius:4px;
    }

    .form-select{
      width:100px;
      height:30px;
      padding:6px 12px;
      font-size:14px;
      color:#555;
      background-color:#fff;
      border:1px solid #ccc;
      border-radius:4px;
    }

    .form-checkbox{
      width:15px;
      height:15px;
      color:#555;
      background-color:#fff;
      border:1px solid #ccc;
      border-radius:4px;
    }


    .font_form{
    	font-family: serif;
    	font-size: 18pt;
    }

    .butao{
      width:300px;
      height:30px;
      font-weight: bold;
      color:#000;
      background-color: #FFA500;
      border:1px solid #ccc;
      border-radius:4px;
      margin-top: -20px;
      float: right;
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
                            <li class="opcao_menu">
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

<section>
	<br><h3 class="modal-title" align="center">SOLICITAR COTAÇÃO</h3><br>
	<div class="col-md-10 col-md-offset-1" style="border: 2px solid silver; height: 480px; 
	overflow-x: hidden;">

		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		  <br>
		  <div class="row">
		  		<div class="form-group col-md-3">
					   <label for="solicitacao">Nº Solicitação:</label>
					   <input type="text" disabled="" class="form-control" id="solicitacao" name="solicitacao">
				 </div>

				 <div class="form-group col-md-3">
					   <label for="data">Data:</label>
					   <input type="date" class="form-control" name="data" id="data">
				 </div>
				 <div class="form-group col-md-3">
					   <label for="apuracao">Apuração:</label>
						<select class="form-control" name="apuracao" id="apuracao">
							<option>Por item</option>
							<option>Global</option>
						</select>
				 </div>
				 <div class="form-group col-md-3">
					   <label for="finalidade">Finalidade:</label>
						<select class="form-control" name="finalidade" id="finalidade">
							<option>Contratação Direta</option>
							<option>Licitação</option>
						</select>
				 </div>
		  </div>

		  <div class="form-group col-md-3">
		  		<label for="visivel">Visível:</label>
		  		<input type="checkbox" name="visivel" class="">
		  </div>

		  	
		  

		<br>

			<span class="font_form col-md-12">Lista de Envio:</span><br>

			<table class="table table-striped" cellspacing="0" cellpadding="0" 
			style="border-bottom: 2px solid green; ">
			     <thead>
			          <tr>
			              <th>NOME</th>
			              <th>CNPJ/CPF</th>
			              <th>ENDEREÇO</th>
			              <th>TELEFONE</th>
			           </tr>
			      </thead>
			      <tbody>
			          <tr>
				          <td>1306.001/2017</td>
				          <td>--------</td>
				          <td>13/06/2017</td>
				          <td>--------</td>
			          </tr>
			    </tbody>
			</table>
			<button type="submit" class="btn btn-success" style="float: right;">INCLUIR FORNECEDOR</button><br><br>
			<div id="actions" class="row" style="float: right;">
			    <div class="col-md-12">
				      <button type="submit" class="btn btn-primary">Enviar</button>
				      <a href="obras.php" class="btn btn-default">Cancelar</a>
			    </div>
		  </div>
		</form>
	</div>
</section>

</body>
</html>