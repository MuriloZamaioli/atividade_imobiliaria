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

while ($linha = mysqli_fetch_assoc($resultado)) {
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
<div class="container mt-5">
  <div class="row g-5 align-items-center">
    <div class="col-md-6">
      <img src="<?= $foto ?>" class="card-img-top img-fluid" style="height: 600px; width: 100%; object-fit: cover;">


    </div>

    <div class="col">
      <h2 class="text-primary fw-bold fs-2"><?= $titulo ?></h2>
      <h4 class="text-success mb-4 mt-2 fs-4">R$ <?= number_format($preco, 2, ',', '.') ?></h4>

      <ul class="list-group list-group-flush">
        <li class="list-group-item"><span class="fw-bold">Descrição:</span> <?= $descricao ?></li>
        <li class="list-group-item"><span class="fw-bold">Endereço:</span> <?= $endereco ?></li>
        <li class="list-group-item"><span class="fw-bold">Cidade:</span> <?= $cidade ?></li>
        <li class="list-group-item"><span class="fw-bold">Tipo:</span> <?= $tipo ?></li>
        <li class="list-group-item"><span class="fw-bold">Status:</span> <?= $status ?></li>
        <li class="list-group-item"><span class="fw-bold">Tamanho:</span> <?= $tamanho ?></li>
      </ul>

      <div class="mt-4">
        <a href="javascript:history.back()" class="btn btn-outline-secondary">Voltar</a>
      </div>
    </div>
  </div>
</div>

<?php include 'rodape.php'; ?>