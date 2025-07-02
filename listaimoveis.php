<?php include 'cabecalho.php' ?>
<div class="container"> 
    <h2 class="h1 text-center mt-5 subtitulo">Todos os imóveis</h2>

    <div class="row campo-cards justify-content-center mt-5">
        <?php
        include "conexao.php";
        $sql = "SELECT * FROM tb_imobiliaria";
        $resultado = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4 d-flex align-items-stretch">
                <div class="card w-100 h-100 d-flex flex-column">
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
</div> 
<?php include 'rodape.php'; ?>
