<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Imobiliária</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <header class="cabecalho">
        <div class="cabecalho-conteudo">
            <div class="menu-logo">
                <img src="imagens/logo.png.png" alt="Logo Morada Prime" class="logo img-fluid" />
                <h1 class="titulo">Morada Prime</h1>
            </div>

            <nav class="menu-esquerda">
                <a href="index.php" class="menu-cabecalho">Início</a>
                <a href="index.php?tipo=Casa" class="menu-cabecalho">Casas</a>
                <a href="index.php?tipo=Apartamento" class="menu-cabecalho">Apartamentos</a>
                <a href="index.php?tipo=Terreno" class="menu-cabecalho">Terrenos</a>
                <a href="index.php?tipo=Comercial" class="menu-cabecalho">Comerciais</a>
                <a href="listaimoveis.php" class="menu-cabecalho">Todos</a>
            </nav>
            <a href="#" class="menu-cabecalho entrar" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Entrar em Contato
            </a>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Para entrar em contato:</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3 mt-2">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nome completo:</label>
                                    <input type="name" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Telefone:</label>
                                    <input type="tel" class="form-control" id="recipient-name">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>