<?php include_once 'php/conexao.php';
$number = 1;
$number = str_pad($number, 3, '0', STR_PAD_LEFT);
$ano = date('y');
$mes = date('m');
$dia = date('d');

$numSolicitacao = $ano.$mes.$dia."/".$number++;  
?>

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
<section class="col-md-10 col-md-offset-1" style=" padding: 0px; background: #fff; height: 500px; margin-top: 10px;">
  <a href="index.php"><button class="active btn">Solicitação de Despesa</button></a>
  <a href="listagem_solic/empenho.php"><button class="desativado btn">Solicitação de Empenho</button></a>
  <a href="listagem_solic/liquidacao.php"><button class="desativado btn">Solicitação de Liquidação</button></a>
  <div class="col-md-12" style="height: 500px; border: 2px solid silver; overflow-x: hidden;">
      <br><h3 class="modal-title" align="center">PROCURAR POR SOLICITAÇÕES FEITAS</h3>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="row">
                  <div class="form-group col-md-3">
                     <label for="n_empenho">Nº Solicitação:</label>
                     <input type="text" class="form-control" id="solicitacao" name="solicitacao" readonly = true 
                     value="<?php echo $numSolicitacao;?>">
                 </div>
                 <div class="form-group col-md-3">
                     <label for="data">Data:</label>
                     <input type="date" class="form-control" name="data" id="data">
                 </div>
                 <?php 
						$sql = mysqli_query($con, "SELECT * FROM elemento") or die( mysqli_error($con)); 
                 ?>
                 <div class="form-group col-md-3">
                     <label for="secretaria">Elemento Despesa:</label>
                     			
                     
                     <select class="form-control" name="secretaria" id="secretaria">
                     		<?php while($aux = mysqli_fetch_assoc($sql)) {?>
                        <option><?php 
                        
										echo $aux["nome"];
                        	
                        ?>
                        	</option><?php }?>
                     </select>
                 </div>
                 
                 <div class="form-group col-md-3">
                  <?php 
					$sql = mysqli_query($con, "SELECT * FROM subelemento") or die( mysqli_error($con)); 
                 ?>	
                 
                     <label for="subelemento">Subelemento:</label>
                     <select class="form-control" name="subelemento" id="subelemento">
                        <?php while($aux = mysqli_fetch_assoc($sql)) {?>
                        <option><?php 
                        
										      echo $aux["nome"];
                        	
                        ?>
                        	</option><?php }?>
                     </select>
                 </div>
                 <div class="form-group col-md-3">
                 
                     <label for="secretaria">Tipo:</label>
                     <select class="form-control" name="secretaria" id="secretaria">
                        <option>--------</option>
                     </select>
                 </div>
                 <div class="form-group col-md-3" style="padding: 0px;">
                 <label for="visivel">&nbsp;</label><br>
                 
                 <div class="col-md-12">
                    <a href="solic_dep" class="btn btn-primary col-md-12">NOVA SOLICITAÇÃO DE DESPESA
                    </a>
                 </div>
             </div>
             </div>
             <table class="table table-striped" cellspacing="0" cellpadding="0" 
             style="border-bottom: 2px solid green; ">
               <thead>
                    <tr>
                        <th>Nº DA SOLICITAÇÃO</th>
                        <th>DATA</th>
                        <th>ELEMENTO DESPESA</th>
                        <th>SUBELEMENTO</th>
                        <th>TIPO</th>
                        <th></th>
                     </tr>
                </thead>
                <tbody>
                <?php 
                $c = 1;
                $sql = mysqli_query($con, "SELECT * FROM solicitacao_de_despesa") or die( mysqli_error($con)); 
                while($aux = mysqli_fetch_assoc($sql)) {
                ?>
                    <tr>
                      <td><?php echo $numSolicitacao.$aux["solicitacao"]?></td>
	
                      <td><?php echo $aux["data"]?></td>
                      <td><?php echo $aux["elemento_despesa"]?></td>
                      <td><?php echo $aux["subelemento"]?></td>
                      <td><?php echo $aux["tipo"]?></td>
                      <td>
                        <a href="#" data-toggle="collapse" <?php echo" data-target='#$c'" ?> class='btn btn-info btn-xs'>
                            Ver detalhado
                        </a><br><br>

                        <div <?php echo" id='$c' " ?> align="center" class="col-md-12 collapse" style="width: 1000px; position: relative; height: 50px; float:left; margin-left: -900px;border:1px solid silver;">
                              <div class="form-group col-md-3">
                                  <label for="n_empenho">Nº Solicitação:</label><br>
                                  <?php echo $aux["solicitacao"]?>
                              </div> 
                              <div class="form-group col-md-3">
                                  <label for="n_empenho">Data:</label><br>
                                  <?php echo $aux["data"]?>
                              </div> 
                              <div class="form-group col-md-3">
                                  <label for="n_empenho">Registro:</label><br>
                                  <?php echo $aux["registro"]?>
                              </div>
                              <div class="form-group col-md-3">
                                  <label for="n_empenho">Dotação:</label><br>
                                  <?php echo $aux["dotacao"]?>
                              </div>
                              <div class="form-group col-md-3">
                                  <label for="n_empenho">Elemento Despesa:</label><br>
                                  <?php echo $aux["elemento_despesa"]?>
                              </div> 
                              <div class="form-group col-md-3">
                                  <label for="n_empenho">Subelemento:</label><br>
                                  <?php echo $aux["subelemento"]?>
                              </div>
                              <div class="form-group col-md-3">
                                  <label for="n_empenho">Tipo:</label><br>
                                  <?php echo $aux["tipo"]?>
                              </div>
                              <div class="form-group col-md-3">
                                  <label for="n_empenho">Objeto:</label><br>
                                  <?php echo $aux["objeto"]?>
                              </div>

                        </div>
                      </td>
                    </tr>
              <?php
                $c += 1;
               }?>
              </tbody>
           
            </table>
          </form>
</body>
</html>