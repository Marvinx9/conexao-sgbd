<html>
	<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/
dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
crossorigin="anonymous">

<body class="container">
<div>
	<h1>Escola de Teste</h1></div>
	<div>
	<p>
		<a href="novo.html" class="btn btn-primary">
		Novo Aluno</a>
	</p></div>
<?php
require_once 'inclusao.php';
require_once 'consulta.php';	

if (isset($_POST["matricula"])){
	$mensagem = incluir($_POST["matricula"],
				$_POST["nome"], $_POST["entrada"]);
	echo("<hr/>".$mensagem."<hr/>");
}
$alunos = obterAlunos();
?>
<table class="table">
<tr class="table-dark"><td>Matricula</td>
  <td>Nome</td><td>Entrada</td></tr>
  
 <?php
 foreach($alunos as $obj) {
	echo "<tr><td>$obj->matricula</td>";
	echo "<td>$obj->nome</td>";
	echo "<td>$obj->entrada</td></tr>";
}
?>
</table>
</body></html>