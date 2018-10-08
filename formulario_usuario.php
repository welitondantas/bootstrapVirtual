<!DOCTYPE html>
<html lang="pt-br">
<head>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>

	<meta charset="utf-8">

	<!-- Tela ajustando dependendo do dispositivo --> 
	<meta name="tamanho de tela" content="whidth=device-whidth,initial-scale=1">

	<title>Sistema Virtual veiculos</title>
	<meta name="descrição" content=" Empresa especializada em publicações de veiculos e comprar e vendas ">
	<meta  name="Palavras chaves" content="veiculos, vendas">
	<meta name="autor" content="Weliton Dantas">
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">

	<title>Formulario de usuarios </title>
</head>
<body>

	<div class="container"> 
		<h2>Formulario de usuario</h2>
		<br>
		<br>

	<form id="meuformulario" action="salvarusuario.php" method="POST">

  	<div class="form-group">
    <label for="exampleInputEmail1">Nome completo</label>
    <input type="text" class="form-control" name="nomec" placeholder="Nome completo">
    </div>
	<br>

 	 <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="emailc" placeholder="seuemail@dominio.com">
 	</div>
	<br>

  	<div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" name="senhac" id="senhac" placeholder="crie uma senha">
 	 </div>
  	<br>

  	<div class="form-group">
    <label for="exampleInputPassword1">Confirme senha</label>
    <input type="password" class="form-control" name="senhaconfirmec" placeholder="Confirme senha">
  	</div>
  	<br>


  	<button type="submit" class="btn btn-primary">Cadastrar</button>


</form>

	<script>
		$( "#meuformulario" ).validate({

  		rules: {
    	nomec: {
     	required: true
    },

   		emailc:{
    		required:true,
    		email:true
    },

    	senhac:{
    		required:true
    },

   		senhaconfirmec:{
    		required:true,
    		equalTo:"#senhac"
    }

}, messages:{

	nomec: {
     	required: "campo obrigatorio"
    },

   		emailc:{
    		required:"campo obrigatorio",
    		email:"digite um email valido"
    },

    	senhac:{
    		required:"campo obrigatorio"
    },

   		senhaconfirmec:{
    		required:"campo obrigatorio",
    		equalTo:"as senhas diferem"
    }
}

});


</script>
</div>
</body>
</html>