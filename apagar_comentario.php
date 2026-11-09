<?php
require('conexao.php');

$idComentario = $_GET['id'];
$idOferta = $_GET['id_oferta'];

$comando = "DELETE FROM `comentarios` WHERE `id_comentario` = $idComentario";

$linhas = $conexao->exec($comando);

if($linhas == 1) {
    echo "Comentário apagado! ";
    echo "<a href=\"detalhe_oferta.php?id=$idOferta\">Voltar</a>";
}
?>
