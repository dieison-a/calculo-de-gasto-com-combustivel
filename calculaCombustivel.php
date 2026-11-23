<?php

$distancia = $_POST['distancia'];
$consumo = $_POST['consumo'];
$precoGasolina = $_POST['precoGasolina'];

// preço da gasolina
define("PRECO_GASOLINA", $precoGasolina);

// litros consumidos
$litros = $distancia / $consumo;

// gasto total
$gasto = $litros * PRECO_GASOLINA;
?>

<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Resultado da Viagem</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<main class="card">
			<h1>Resultado da Viagem</h1>
			<p>Distância da viagem: <?php echo number_format($distancia, 1, ',', '.'); ?> km</p>
			<p>Consumo do carro: <?php echo number_format($consumo, 1, ',', '.'); ?> km/litro</p>
			<p>Litros consumidos: <?php echo number_format($litros, 2, ',', '.'); ?> litros</p>
			<p>Preço por litro: R$ <?php echo number_format(PRECO_GASOLINA, 2, ',', '.'); ?></p>
			<p><strong>Gasto total: R$ <?php echo number_format($gasto, 2, ',', '.'); ?></strong></p>
		</main>
	</body>
</html>