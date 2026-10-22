<?php 
 require "../config/conexao.php"; 
 $ano = (int) $_GET["ano"]; 
 $resultado = $conexao->prepare("SELECT * FROM goty_winners WHERE ano = ?");
 $resultado->execute([$ano]);
 $vencedor = $resultado->fetch(PDO::FETCH_ASSOC);
?> 
<h1>Editar Vencedor</h1> 
<form action="atualizar.php" method="POST"> 
 <input type="hidden" name="ano" value="<?php echo $vencedor['ano']; ?>">  Nome do jogo: <input type="text" name="nome_do_jogo" value="<?php echo $vencedor['nome_do_jogo']; ?>"><br>  Desenvolvedora: <input type="text" name="desenvolvedora" value="<?php echo $vencedor['desenvolvedora']; ?>"><br> 
 <button type="submit">Atualizar</button> 
</form>
