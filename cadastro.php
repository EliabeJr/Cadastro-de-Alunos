<html>
<head>
	<meta http-equiv="refresh" content="2; url=tela2.php">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Tela 2</title>
</head>
<body>

	<header class="container">

		<img src="img/logo.jpg" alt="logo" title="logo">

		<h1>CADASTRANDO SEUS DADOS...</h1>

	</header>

	<div class="container">
	<?php

	$host= 'localhost';
	$bd= 'alunos';
	$userbd = 'root'; 
	$senhabd= 'root';

	if (isset($_POST['nome'])) {
		$qtdAlunos = count(array_filter($_POST['nome']));
		
		if ($qtdAlunos <=0) {
			echo "Insira ao menos um aluno!";
		} else {
			for ($i=0; $i < $qtdAlunos; $i++) { 
				$nome	= $_POST ['nome'][$i];
				$nota1	= $_POST ['nota1'][$i];
				$nota2	= $_POST ['nota2'][$i];
				$nota3	= $_POST ['nota3'][$i];

				$conn = new PDO('mysql:host=localhost;dbname=alunos', 'root', 'root');
	
				$query = "INSERT INTO customers(nome, nota1, nota2, nota3) VALUES(:nome, :nota1, :nota2, :nota3)";

				$stmt = $conn->prepare($query);

				$stmt->execute(['nome' => $nome, 'nota1' => $nota1, 'nota2' => $nota2, 'nota3' => $nota3]);
				 
			}
		}
	}
	
	echo "Seu cadastro foi realizado com sucesso!<br>Você será redirecionado para a tabela com resultados.";

	 
	 
	// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
	// $nome	= $_POST ['nome'];
	// $nota1	= $_POST ['nota1'];
	// $nota2	= $_POST ['nota2'];
	// $nota3	= $_POST ['nota3'];


	// foreach ($nome as $nomeAluno) {
	// 	return $nomeAluno;
	// }
	// foreach ($nota1 as $nota1Aluno) {
	// 	return $nomeAluno;
	// }
	// foreach ($nota2 as $nota2Aluno) {
	// 	return $nomeAluno;
	// }
	// foreach ($nota3 as $nota3Aluno) {
	// 	return $nomeAluno;
	// }

	//Gravando no banco de dados !
	 
	//conectando com o localhost - mysql

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
