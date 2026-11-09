<?php
require('conexao.php');

$idOferta = $_GET['id'];

$conexao->exec("DELETE FROM `comentarios` WHERE `id_oferta` = $idOferta");
$comando = "DELETE FROM `ofertas` WHERE `id_oferta` = $idOferta";

$linhas = $conexao->exec($comando);

if($linhas == 1) {
    echo "Oferta apagada! ";
    echo "<a href=\"ofertas.php\">Voltar</a>";
}
?>
