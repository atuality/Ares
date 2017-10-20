<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<link rel="shortcut icon" href="img/logo_jr.png" type="image/x-icon">
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/estilo.css">
  	<script src="js/jquery.js" type="text/javascript"></script>
  	<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
	<title>Login - Fornecedor</title>
	<style type="text/css">

		 body{
	    	background-image: url(img/k.png);
	    	background-size: 100%;
	    	background-attachment: fixed; 
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
                    
                    <div class="collapse navbar-collapse" id="barraSuperior" style="margin-right: 100px; margin-top: 7px;">
                    	<form class="navbar-right">	
                    		<input type="text" name="login" class="form-login" placeholder="CNPJ/CPF">
                    		<input type="password" name="senha" class="form-login" placeholder="Senha">
                    		<input type="submit" name="entrar" value="Entrar" class="btn_entrar btn bt_default">
                    	</form> 
                    </div><!-- /.navbar-collapse -->
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