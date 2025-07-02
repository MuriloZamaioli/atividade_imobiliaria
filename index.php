<?php include 'cabecalho.php'
?>
<div class="banner">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/banner1.jpg" class="d-block w-100 imagem-carrossel" alt="casa1">
            </div>
            <div class="carousel-item">
                <img src="imagens/banner2.jpg" class="d-block w-100 imagem-carrossel" alt="casa2">
            </div>
            <div class="carousel-item">
                <img src="imagens/banner3.jpg" class="d-block w-100 imagem-carrossel" alt="casa3">
            </div>
            <div class="carousel-item">
                <img src="imagens/banner4.jpg" class="d-block w-100 imagem-carrossel" alt="casa4">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<h2 class="h1 text-center mt-5 subtitulo">Imóveis em Destaque</h2>

<div class="row campo-cards justify-content-center mt-5">
    
    <?php
    include "conexao.php";

    $tipo = $_GET['tipo'] ?? '';

    if ($tipo != '') {
        $sql = "SELECT * FROM imobiliaria WHERE tipo = '$tipo'";
        
    } else {
        $sql = "SELECT * FROM imobiliaria LIMIT 6";
    }

    $resultado = mysqli_query($conexao, $sql);
    while ($linha = mysqli_fetch_assoc($resultado)) {
    ?>
        <div class="col-md-6 mb-4 d-flex align-items-stretch">
            <div class="card h-100 d-flex flex-column mx-auto" style="width: 85%;">
                <img src="<?= $linha['foto']; ?>" class="card-img-top img-fluid" style="height:190px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title titulo-card"><?= $linha['titulo']; ?></h5>
                    <p class="card-text flex-grow-1"><?= $linha['descricao']; ?></p>
                    <a href="umimovel.php?id=<?= $linha['id'] ?>" class="btn btn-primary mt-3">Veja detalhes</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?php include 'rodape.php'; ?>
