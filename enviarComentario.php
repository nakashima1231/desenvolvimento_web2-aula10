<?php 
    require('conexao.php');
    session_start();

    $idProduto = $_POST['id'];
    $comentario = $_POST['comentario'];
    $id = $_SESSION['id'];

    $comando = "INSERT INTO `comentarios` (`id_usuario`, `id_oferta`, `comentario`) VALUES(1, 5, '$comentario')";

    $linhas = $conexao->exec($comando);

    if($linhas == 1) {
        echo "comentario salvo!";
        echo "<a href=\"detalhe_oferta.php?id=$idProduto\"></a>";
    }
?>
