<?php
session_start(); 

// Destruir a sessão atual (deslogar)
session_destroy();

// Redirecionar para a página de login ou qualquer outra página desejada
header('Location: ../Login.php'); 
?>