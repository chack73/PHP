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
            <div class="row form-group">
                
                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                    <label>Documento</label>
                    <input type="text" class="form-control" name="documento" id="documento" placeholder="CPF ou passaporte" required>
                </div>
                
                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu Nome" required>
                </div>
                
            </div>
            
            <div class="row form-group">
                 <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                    <label>Endereçoo</label>
                    <input type="text" class="form-control" name="endereco1" id="endereco1" placeholder="Rua" required>
                 </div>
               
                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" name="enredeco2" id="endereco2" placeholder="Nº" required>  
                </div>   
            </div>
            
            <div class="row form-group">
                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                    <label>País</label>
                    <input type="text" class="form-control" name="pais" id="pais" placeholder="Pais" required>
                </div>
            
            
                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                   <select name="uf" id="uf" class="form-control" >
                     <option value=1>IBGE</option>
                     <option value=2>ibge2</option>
                   </select>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                   <select name="uf" id="uf" class="form-control">
                        <option value=1>UF</option>
                        <option value=2>cidade2</option>
                   </select>
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                    <label>Telefone</label>
                    <input type="number" class="form-control" name="fone" id="fone" placeholder="Telefone fixo ou celular" required>
                </div>
           
            
                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Seu E-mail" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                    <label>Data de Nascimento</label>
                    <input type="number" class="form-control" name="datanasc" id="datanasc" placeholder="__/__/____" required>
                </div>
            </div>
        </form>
    </body>
</html>
 