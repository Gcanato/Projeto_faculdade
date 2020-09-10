<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>
<?php 
include "index.php";
		
require 'conexao.php';

if (isset($_REQUEST['btncadastrar']) && $_REQUEST['btncadastrar'] == "Cadastrar"){ 
include 'inserir_funcionario.php';
}


if (isset($_REQUEST['txtid']) && $_REQUEST['txtid'] != ""){
include 'buscar_funcionario.php';
$resultadoFuncionario = consultaFuncionario($conn,$_REQUEST['txtid']);
$resultadoFuncionarioTela = mysqli_fetch_array($resultadoFuncionario);
}

//isset verifica se existe
if (isset($_REQUEST['btnalterar']) && $_REQUEST['btnalterar'] == "Alterar"){ 
include 'alterar_funcionario.php';
}

//isset verifica se existe
if (isset($_REQUEST['btnexcluir']) && $_REQUEST['btnexcluir'] == "Excluir"){ 
include 'deletar_funcionario.php';
}

?>

<div class="container">
<form name="frm_func" method="post" action="funcionario.php">
	
	<div class="form-group">
			<label for="Id" class="my-2 mr-0">Id</label>

			<input type="id" name="txtid" value="<?php if (isset ($_REQUEST['txtid']))

			{ echo $resultadoFuncionarioTela['Id_funcionario'];}?>"size="11%"/>
			
			
			<?php if (isset($_REQUEST['txtid']) && $_REQUEST['txtid'] != ""){?>
			
			<input type="submit" name="btnexcluir" value="Excluir"/>
			<?php }?>
			
	</div>
	

    <div class="form-group">
			<label for="nome">Nome</label>
			<input type="nome" class="form-control" name="txtnome"
			value="<?php  if (isset ($_REQUEST['txtnome']))
					{ echo $resultadoFuncionarioTela['nome'];} ?>">
	</div>

	<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" name="txtemail" value="<?php  if (isset ($_REQUEST['txtemail']))
			{ echo $resultadoFuncionarioTela['Email'];} ?>">
	</div>
	
	<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" class="form-control" name="txtsenha" >
			
	</div>
	                    
	<input type="submit" name="btnbuscar" value="Buscar"/>
	<button type="submit" name="btncadastrar" value="Cadastrar"/>Cadastrar</button>								   

	<?php if (isset($_REQUEST['txtid']) && $_REQUEST['txtid'] != ""){?>
	<input type="submit" name="btnalterar" value="Alterar"/>
	<?php }?>								   

</form>
</div>
</body>
</html>