<?php
require '../config/conexao.php';
$conexao = new PDO('mysql:host=localhost;dbname=jogos', 'root', '');
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pesquisa = trim($_GET['pesquisa'] ?? '');
$vencedores = [];

if ($pesquisa !== '') {
	$termo = "%{$pesquisa}%";
	$consulta = $conexao->prepare(
		'SELECT ano, nome_do_jogo, desenvolvedora
		 FROM goty_winners
		 WHERE nome_do_jogo LIKE ?
			OR desenvolvedora LIKE ?
			OR CAST(ano AS CHAR) LIKE ?
		 ORDER BY ano DESC'
	);
	$consulta->execute([$termo, $termo, $termo]);
	$vencedores = $consulta->fetchAll(PDO::FETCH_ASSOC);
}

function escapar(string $valor): string
{
	return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GOTY Jogos | Pesquisa</title>
	<link rel="stylesheet" href="../css/main.css">
</head>
<body class="light-theme">
	<header class="site-header">
		<div class="logo-area">
			<a class="logo-link" href="../index.html">
				<span class="logo-mark">G</span>
				<span class="logo-text">GOTY JOGOS</span>
			</a>
		</div>

		<nav class="navbar" aria-label="Navegação principal">
			<a href="../index.html">Início</a>
			<a href="disputa.html">Disputa</a>
			<a href="pesquisa_jogos.php" class="active">Pesquisar jogos</a>
			<button class="btn" type="button">Dark</button>
		</nav>
	</header>

	<main class="container">
		<section class="search-section">
			<h1>Pesquisa - Jogos</h1>
			<form class="search-form" method="get" action="pesquisa_jogos.php">
				<label for="pesquisa">Pesquise um jogo</label>
				<div class="search-row">
					<input type="search" id="pesquisa" name="pesquisa" placeholder="Digite o nome do jogo..." value="<?= escapar($pesquisa) ?>" required>
					<button type="submit">Pesquisar</button>
				</div>
			</form>
		</section>

		<section class="result-section" aria-live="polite">
			<div class="result-image">
				<img src="../img/goty1.png" alt="Imagem do jogo pesquisado">
			</div>
			<div class="result-context">
				<?php if ($pesquisa === ''): ?>
					<h2>Jogo pesquisado</h2>
					<p>Digite o nome de um jogo para consultar o banco de dados.</p>
				<?php elseif ($vencedores === []): ?>
					<h2>Nenhum jogo encontrado</h2>
					<p>Não há registros correspondentes à pesquisa.</p>
				<?php else: ?>
					<?php foreach ($vencedores as $vencedor): ?>
						<h2><?= escapar($vencedor['nome_do_jogo']) ?></h2>
						<p><strong>Ano:</strong> <?= escapar((string) $vencedor['ano']) ?></p>
						<p><strong>Desenvolvedora:</strong> <?= escapar($vencedor['desenvolvedora']) ?></p>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</section>
	</main>

	<footer class="footer">
		<p>GOTY Jogos &copy; 2026</p>
	</footer>

	<script src="../js/app.js"></script>
</body>
</html>


