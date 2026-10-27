<?php 
    require('conexao.php');
    session_start();

    $idProduto = $_POST['id'];
    $comentario = $_POST['comentario'];
    $id = $_SESSION['id'];

    $comando = "INSERT INTO `comentarios` (`id_usuario`, `id_oferta`, `comentario`) 
    VALUES($id, $idProduto, $comentario)";

    $linhas = $conexao->exec($comando);

    if($linhas == 1) {
        echo "comentario salvo!";
    }
?>