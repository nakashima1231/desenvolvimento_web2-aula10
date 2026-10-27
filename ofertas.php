<?php
require('conexao.php');

$comando = "SELECT `id_oferta`, `foto`, `valorOferta` FROM `ofertas` ORDER BY `id_oferta` DESC";

$stm = $conexao->prepare($comando);
$stm->execute();

while($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {
    echo "<a href=\"detalhe_oferta.php?id={$resultado['id_oferta']}\"><img src='{$resultado['foto']}' height='100px'></a>";
    echo "<br><h2>";
    echo $resultado['valorOferta'];
    echo "</h2><br>";
}


?>
