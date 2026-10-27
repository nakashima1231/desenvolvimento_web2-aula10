<?php
require('conexao.php');

$i = $_GET['id'];

$comando = "SELECT * FROM `ofertas` WHERE `id_oferta` = $i";

$stm = $conexao->prepare($comando);
$stm->execute();

while($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {
    echo "<img src='{$resultado['foto']}' height='100px'>";
    echo "<h1>{$resultado['nome']}</h1>";
    echo "<p>{$resultado['descricao']}</p>";
    echo "<h3>{$resultado['valorOferta']}</h3>";
    echo "<a href='{$resultado['link']}'>Comprar</a>";
}

$comandoComentario = "SELECT `comentario` FROM `comentarios` WHERE `id_oferta` = $i  ORDER BY `id` ASC";

$stm = $conexao->prepare($comandoComentario);
$stm->execute();

while($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {
    echo "<h2>$resultado[comentario]</h2>";
}
?>



<form action="enviarComentario.php" method="post">
    <label for="">Digite um comentario: </label>
    <input type="text" name="comentario"> <br>

    <label for="">Enviar comentario</label>

    <input type="hidden" name="id" value="<?php echo $i; ?>"> 
    <input type="submit">
</form>
