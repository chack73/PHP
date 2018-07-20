<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Projeto novo</title>
        <link href="<?php echo base_url();?>bootstrap-4/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>fontawesome-5/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet"/>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo base_url();?>bootstrap-4/js/bootstrap.min.js"></script>
    </head>
    <body>
    	<form method="post" >
            <div style="align:center;" class="col-lg-4 col-md-6 col-sm-8 col-xs-11"></div>
            <div class="row form-group">
                <div class="container">
                    <div class="card">
                        <div class="card-header">Infoserv</div>
                        <div class="card-body">
                            <hp5 class="card-title">Login</hp5>
                            <p class="card-text"> 
                                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-11"  >
                                    <label>Usuario</label>
                                    <input type="text" class="form-control" name="usuario" id="usuario" required>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-11"  >
                                    <label>Senha</label>
                                    <input type="text" class="form-control" name="senha" id="senha" required>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-11">
                                    <div class="row form-group"></div>
                                    <input type="submit" value="submit" class="form-control"> 
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
        </form>
    </body>
</html>
  