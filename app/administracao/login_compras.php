<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../assets/img/logo_jr.png" type="image/x-icon">  
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <script src="../assets/js/jquery.js" type="text/javascript"></script>
    <script src="../assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <title>Login - Compras</title>
    <style type="text/css">

        body{
            background-image: url(img/k.png);
            background-size: 100%;
            background-attachment: fixed; 
        }

        .bt_default:hover {
            background-color: #1b8bcc;
            color: #fff;
        }

        .bt_default {
            background-color: #2c9cdd;
            color: #fff;
        }

        .input{
            height: 40px;
            margin-top: 5px;
        }

        .btn_entrar{
            height: 40px;
            font-weight: bold;
            font-size: 15pt;
        }
    </style>
</head>
<body>
     <div class="container-fluid">
        
        <div class="login col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1 container-fluid row content-row" 
        style="background: ; margin-top: 100px; height: 450px;">
                <p align="center" style="margin-top: 40px;"><img src="img/ll.png"  
                width="280px" style=""></p>
                <form style="margin-top: 30px;">
                    <input type="text" name="usuario" placeholder="Usuário" class="input form-control" 
                    required="required">
                    <input type="password" name="senha" placeholder="Senha" class="input form-control" 
                    required="required">
                    <select class="form-control input">
                        <option>Ano</option>
                        <option>2017</option>
                        <option>2016</option>
                        <option>2015</option>
                    </select>
                    <div style="padding: 0px; margin-top: 10px;">
                        <button type="submit" class="btn_entrar btn bt_default col-md-12 col-sm-12 col-xs-12">
                            ENTRAR
                        </button>
                    </div>
                </form>
                <br><br>
                <p align="right"><a href="">Esqueceu a senha?</a></p>
        </div>
     </div>
     <a href="compras/index.php"> pagina compras</a>
</body>
</html>