<?php include "index.php"; ?>

<!DOCTYPE html>

<html>
<head>
<title>Login</title>

<link rel="stylesheet" a href="content/login2.css">

</head>
<body>
	
	<div class="container">

	<img src="img/login.png"/>


	<form method="get" action="login_consulta.php" class="ediborda">
		<h1>Login</h1>

	<div class="form-group row">

		 <label  for="login" class="col-sm-2 col-form-label"><h4>Email:</h4></label>
		 <div class="col-sm-10">
		   <input type="email" name="txtemail" id="login" placeholder="Email"class="form-control col-md-8"><br>
	</div>
	</div>

	<div class="form-group row">
		<label for="senha" class="col-sm-2 col-form-label"><h4>Senha:</h4></label> 
		<div class="col-sm-10"> 
			<input type="password" name="pwdsenha" id="senha" placeholder="Senha"class="form-control col-md-8"><br>
	</div>
	</div>
		<input type="submit" value="ENTRAR" id="entrar" name="entrar" placeholder="Senha"class="btn btn-primary"><br>
	<!---<a href="cadastrar_usuario.php">Cadastre-se</a>--->

	</form>
</div>

</body>
</html>