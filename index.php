<!DOCTYPE html>

<html lang="pt-br">
	
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Nesta aplicação, adicionando sua data de nascimento, você consegue verificar quanto tempo já viveu em anos, meses, semanas, dias, horas, minutos e segundos.">
		<link href=".\css\styles.css" type="text/css" rel="stylesheet">
		<title>Calcular tempo vivido</title>
	</head>

	<body>
		<div class="container_all">
			<div class="container_top">
				<header>
					<h1>Calcule o tempo que já viveu desde a data do seu nascimento</h1>
				</header>
			</div>
			<div class="container_form">
				<form action="result.php" method="POST">
					<label for="ageDate">Data de Nascimento </label>
					<input type="date" id="ageDate" name="ageDate">
					<button type="submit">Enviar</button>
				</form>
			</div> 
			<div class="container_result">
				<?php
				if(isset($resultado))
					echo $resultado;
				?>		
			</div>
		</div> <!--end container_all --> 
	</body>
	
</html>