<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulario &copy;</title>
  <link rel="stylesheet" type=" text/css" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</head>
<style type="text/css">
  .error{
     color:  red;
  }
  
</style>
<body>

<div class="container">
<h2>Formulario de Cadastro</h2>
<br> 
<br>
	<form id="meuformulario" method="post" action="proc_cad.php">

  <div class="form-group">
    <label for="exampleInputNome">Nome Completo</label>
    <input type="text" class="form-control" name="nomec" placeholder="nome completo">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="emailc" placeholder="seuemail@dominio.com">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Senha</label>
    <input type="password" class="form-control" name="senhac" id="senhac" placeholder="crie uma senha">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Confirme sua senha</label>
    <input type="password" class="form-control" name="senhaconfirmec" placeholder="Confirme sua senha">
  </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  <p class="text-center text-sucess">
    <?php
    if (isset($_SESSION['cadsucess'])){
      echo $_SESSION['cadsucess'];
      unset($_SESSION['cadsucess']);
    }
    ?>
    
  </p>
</form>
<script>
$( "meuformulario" ).validate({
  rules: {
    nomec: {
      required: true
    },
    emailc: {
      required: true,
      email: true
    },
    senhac:{
      required: true
    },
    senhaconfirmec: {
      required: true,
      equaTo: "#senhac"    
    }
  };
  messages:{
     nomec: {
      required: "Campo Obrigatório"
    },
    emailc: {
      required: "Campo Obrigatório",
      email: "Digite um email valido"
    },
    senhac:{
      required: "Campo Obrigatório"
    },
    senhaconfirmec: {
      required: "Campo Obrigatório",
      equalTo: "As senhas diferem"    
    }

  }




});
</script>
</div>
</body>
</html>