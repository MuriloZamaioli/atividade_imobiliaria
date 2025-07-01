<?php include 'cabecalho.php'
?>
    <div class="banner">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagens/casa1.jpg" class="d-block w-100 imagem-carrossel" alt="casa1">
                </div>
                <div class="carousel-item">
                    <img src="imagens/casa2.jpg" class="d-block w-100 imagem-carrossel" alt="casa2">
                </div>
                <div class="carousel-item">
                    <img src="imagens/casa3.jpg" class="d-block w-100 imagem-carrossel" alt="casa3">
                </div>
                <div class="carousel-item">
                    <img src="imagens/casa4.jpg" class="d-block w-100 imagem-carrossel" alt="casa4">
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


    <h2>Todos as casas</h2>
    <div class="row">
        <?php
        include "conexao.php";
        $sql = "select * from imobiliaria";
        $resultado = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $linha['foto']; ?>" class="card-img-top img-formatada">
                    <div class="card-body">
                        <h5 class="card-title"><?= $linha['titulo']; ?></h5>
                        <p class="card-text"> <?= $linha['descricao']; ?></p>
                        <a href="umacasa.php?id=<?= $linha['id'] ?>" class="btn btn-primary">Veja detalhes</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>