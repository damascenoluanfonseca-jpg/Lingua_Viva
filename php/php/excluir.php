<?php 
 require "../config/conexao.php"; 
 $ano = (int) $_GET["ano"]; 
 $conexao->prepare("DELETE FROM goty_winners WHERE ano = ?")->execute([$ano]); 
 header("Location: index.php"); 
?>
