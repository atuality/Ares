<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../assets/img/logo_jr.png" type="image/x-icon">  
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/estilo.css">
    <script src="../../assets/js/jquery.js" type="text/javascript"></script>
    <script src="../../assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <title>Pesquisar Itens</title>
		<title></title>
		<style type="text/css">
		a{
        color: #000;
        }

        a:hover {
        color: #000;
        text-decoration: none;
        }

		.cr{
 			width:160px;
			height:34px;
			padding:6px 12px;
			font-size:14px;
			color:#555;
 			background-color:#fff;
 			border:1px solid #ccc;
 			border-radius:4px;
 			margin-left: 10px;
 		}

 		.form-login{
 			width:300px;
			height:34px;
			padding:6px 12px;
			font-size:14px;
			color:#555;
 			background-color:#fff;
 			border:1px solid #ccc;
 			border-radius:4px;
 			margin-left: 10px;
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
                                 	<b> SOLICITAR COTAÇÃO</b>  
                           </button>
                           </a>   
                      </div>
                            </li>
                        </ul>
                    </div>
                </nav>
        </div>
</section>
<section class="row">
    <div class="col-md-8 col-md-offset-2" style="background: #fff; margin-top: 10px; height: 550px; 
    border: 2px solid silver; overflow-x: hidden;">
    	<br><h3 class="modal-title" align="center">PESQUISAR ITENS</h3><br>
	    <div class="modal-header col-md-10 col-md-offset-1">
	    	<form>
	    		<button type="button" class="btn btn-inverse" aria-expanded="false" 
	    		style="margin-left: 10px;" href="#" data-toggle="modal" data-target="#sub">
                		<b> SUBELEMENTO </b>  
                </button>
	    		</select>
	    		<input type="text" placeholder="Pesquisa" class="form-login">
	    	</form>    
	    </div>
		  <table class="table table-striped" cellspacing="0" cellpadding="0">
		        <thead>
		            <tr>
		            	<th>NOME</th>
		                <th>SUBELEMENTO</th>
		                <th>ELEMENTO DE DESPESA</th>
		             </tr>
		        </thead>
		        <tbody>
		            <tr>
				    	<td>Caneta</td>
					    <td>Material de Expediente</td>
					    <td>Material de Consumo</td>
					</tr>
					</tbody>
			</table>
    </div>
</section>

<section class="row modal fade" id="sub">
    <div class="col-md-4 col-md-offset-4" style="background: #fff; margin-top: 10px;">
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
			<button type="button" class="btn btn-inverse" class="close" data-dismiss="modal"
	    	style="margin-left: 350px; margin-bottom: 10px;">
                <b> Concluir </b><br>
            </button>
    </div>
</section>
</body>
</html>	