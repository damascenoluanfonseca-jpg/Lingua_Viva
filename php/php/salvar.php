<?php 
 require "../conexao.php"; 
 $ano = htmlspecialchars(trim($_POST["ano"])); 
 $nome_do_jogo = htmlspecialchars(trim($_POST["nome_do_jogo"])); 
 $desenvolvedora = htmlspecialchars(trim($_POST["desenvolvedora"])); 
 $sql = "INSERT INTO goty_winners (ano, nome_do_jogo, desenvolvedora) VALUES ('$ano', '$nome_do_jogo', '$desenvolvedora')"; 
 mysqli_query($conexao, $sql); 
 header("Location: index.php"); 
?>
