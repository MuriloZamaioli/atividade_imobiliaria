<?php
include "cabecalho.php";
include "conexao.php";
// Verifica se o ID foi enviado
$id = $_GET['id'] ?? null;


$sql = "SELECT * FROM imobiliaria WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

$titulo = "";
$descricao = "";
$endereco = "";
$cidade = "";
$preco = "";
$tipo = "";
$status = "";
$data_cadastro = "";
$tamanho = "";
$foto = "";

while($linha = mysqli_fetch_assoc($resultado)){
$titulo = $linha["titulo"];
$descricao = $linha["descricao"];
$endereco = $linha["endereco"];
$cidade = $linha["cidade"];
$preco = $linha["preco"];
$tipo = $linha["tipo"];
$status = $linha["status"];
$data_cadastro = $linha["data_cadastro"];
$tamanho = $linha["tamanho"];
$foto = $linha["foto"];

}

?>
<div class="container">
<div class="row mx-5 mt-5">
  <div class="col">
    <img src="<?= $foto ?>" class="img-fluid">
  </div>
  <div class="col">
    <h2 class="text-start"><?= $titulo ?></h2>
    <p><strong>Descricao: </strong> <?=$descricao?></p>
    <p><strong>Endereço: </strong> <?=$endereco?></p>
    <p><strong>Cidade: </strong> <?=$cidade?></p>
    <p><strong>Preço: </strong> <?=$preco?></p>
    <p><strong>Tipo: </strong> <?=$tipo?></p>
    <p><strong>Status: </strong> <?=$status?></p>
    <p><strong>Tamanho: </strong> <?=$tamanho?></p>

    
  </div>
</div>
</div>
<?include "rodape.php";
?>