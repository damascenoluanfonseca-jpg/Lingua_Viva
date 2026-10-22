<?php 
 require "../config/conexao.php"; 
 $ano = (int) $_POST["ano"]; 
 $nome_do_jogo = htmlspecialchars(trim($_POST["nome_do_jogo"])); 
 $desenvolvedora = htmlspecialchars(trim($_POST["desenvolvedora"])); 
 $sql = "UPDATE goty_winners SET nome_do_jogo='$nome_do_jogo', desenvolvedora='$desenvolvedora' WHERE ano=$ano"; 
 mysqli_query($conexao, $sql); 
 header("Location: index.php"); 
?>
