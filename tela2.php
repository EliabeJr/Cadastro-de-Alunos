<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Tela 2</title>
</head>
<body>

	<header class="container">

		<img src="img/logo.jpg" alt="logo" title="logo">

		<h1>RESULTADOS</h1>

	</header>

	<div class="container">
	<?php

		$conecta = mysql_connect("localhost", "root", "root") or print (mysql_error()); 
		mysql_select_db("alunos", $conecta) or print(mysql_error()); 
		$sql = "SELECT nome, nota1, nota2, nota3 FROM customers"; 
		$result = mysql_query($sql, $conecta); 

		/* Escreve resultados até que não haja mais linhas na tabela */ 
		
		echo '<table border="1" cellspacing="0" cellpadding="0">
			  <tr class="titulo"><td class="nome">▼ Nome</td> <td>▼ Nota 1</td> <td>▼ Nota 2</td> <td>▼ Nota 3</td> <td>▼ Média</td></tr></table>';

		while($consulta = mysql_fetch_array($result)) {

			$media	= ($consulta['nome'] + $consulta['nota1'] + $consulta['nota2'] + $consulta['nota3'])/3;
			echo "<table border='1' cellspacing='0' cellpadding='0'><tr><td class='nome'>$consulta[nome]</td> <td>$consulta[nota1]</td> <td>$consulta[nota2]</td> <td>$consulta[nota3]</td> <td>$media</td></tr></table>"; 
		} 

		// public function all($table)
		// {
		// 	return $this->query)("SELECT * FROM customers")
		// }

		// while ($consulta = mysql_fetch_array($result)) {
		// 	print("Nome: $consulta[nome]  -  Nota 1: $consulta[nota1]  -  Nota 2: $consulta[nota2]  -  Nota 3: $consulta[nota3]");
		// }
		
		mysql_free_result($result); 
		mysql_close($conecta); 

	?> <!-- FIM CONEXÃO DB -->

	<footer>
		<div class="container">
			<hr>
			<span>Sistema desenvolvido por RecSystems</span>
		</div>
	</footer>

</div>

</body>
</html>