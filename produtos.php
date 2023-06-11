<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="view/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="view/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="view/css/sweetalert2.min.css" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Produtos</title>
    <link rel="apple-touch-icon" sizes="57x57" href="imagens/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="imagens/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="imagens/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="imagens/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="imagens/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="imagens/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="imagens/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="imagens/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="imagens/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="imagens/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<style>
    .container-fluid {
        padding: 0;
    }

    .caixa {
        border: 0.1rem solid #000;

    }

    #mainSlider .carousel-inner,
    #mainSlider .carousel-item {
        height: 70vh;
    }

    #mainSlider .carousel-caption {
        top: 30%;
    }

    #mainSlider .carousel-caption h2 {
        font-size: 50px;
        margin-bottom: 30px;
    }

    #mainSlider .carousel-caption p {
        font-size: 22px;
        font-weight: 300;
        margin-bottom: 100px;
        color: #fff;
    }

    .main-btn {
        background-color: #B22222;
        color: #fff;
        text-transform: uppercase;
        width: 200px;
        height: 60px;
        padding: 10px 20px;
        border-radius: 30px;
        border: 3px solid transparent;
        transition: .5s;
    }

    .main-btn:hover {
        text-decoration: none;
        color: #fff;
        background-color: transparent;
        border-color: #fff;
    }

    .carousel-indicators .active {
        background-color: #B22222;

    }

    body {
        font-family: 'Roboto', sans-serif;
    }

    .row {
        margin: 0;
    }

    .container {
        padding: 70px 0;
    }

    p,
    li {
        color: red;
        font-size: 10px;
    }

    header,
    .navbar {
        background-color: red;
    }

    #nav-container {
        padding-top: 0;
        padding-bottom: 0;
    }

    .navbar-brand {
        padding: 0;
        color: #fff;
    }

    .navbar-brand:hover {
        color: red;
    }

    .navbar-links a {
        color: #fff;
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding: 1rem .8rem;
        color: white;
    }

    .btnl {
        color: black;
    }

    .fundo {
        background-color: black;
        color: #fff;
        border: 10px 10px 10px 10px;
        border-color: red;
    }

    .imagensL {
        border-radius: 40px;
    }

    .center {
        text-align: center;
    }

    .pagination {
        display: inline-block;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid black;
        margin: 0 4px;
    }

    .pagination a.active {
        background-color: red;
        color: white;
        border: 1px solid black;
    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
    }
</style>

<body>
    <div class="container-fluid">
        <header class="">
            <div class="container" id="nav-container">
                <nav class="navbar navbar-expand-lg">
                    <a href="index.php"><img src="imagens/logo.png" alt="ByBikes" style="width:260px; height:260px; margin-left:-230px; margin-top:-85px; margin-bottom: -65px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link navbar-brand" id="home-menu" href="index.php"> Home</a>
                            <a class="nav-item nav-link navbar-brand" id="bikes-menu" href="produtos.php"> Produtos</a>
                            <a class="nav-item nav-link navbar-brand" id="services-menu" href="servicos.php"> Serviços</a>
                            <?php if (!isset($_SESSION) || !isset($_SESSION['id']) || $_SESSION['id'] !== session_id()) {
                                echo '<a class="nav-item nav-link navbar-brand" id="login-menu" href="../Pi/telaLg/index.php">Login</a>';
                            } ?>
                        </div>
                    </div>
                </nav>
        </header>
        <hr>
        <main role="main">
            <div id="conteudo-produto"></div>
        </main>
        <hr>
        <div class="center">
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="produtos2.php">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="produtos2.php">&raquo;</a>
            </div>
        </div>
        <hr>
        <footer>
            <div class=" footer-content">
                <h3>ByBikes</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam laboriosam maxime hic itaque perspiciatis quis nostrum natus quisquam pariatur architecto nulla atque molestias, officia, explicabo est nemo alias, rerum consectetur.</p>
                <ul class="sociais">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>Feito por Gabriel Passos e Eric &copy;2022</p>
            </div>
        </footer>
    </div>
    </div>
</body>
<script src="view/js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="view/js/sweetalert2.all.min.js" type="text/javascript"></script>
<script src="view/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/d3d6f2df1f.js" crossorigin="anonymous"></script>

<script type="text/javascript" charset="utf-8">
    function conteudo(id, nome, image, preco) {
        return `
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="imagens/${image}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-dark h5"> ${nome} <BR><BR></p>
                        <p class="text-dark h5"> ${preco} </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="./pdpg/produtoab.php?id=${id}"><button type="button"
                                        class="btn btn-sm btn-outline-secondary">Comprar</button></a>
                                <a href="./pdpg/produtoab.php?id=${id}"><button type="button"
                                        class="btn btn-sm btn-outline-secondary">Alugar</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
    }

    async function carregarDados() {
        const request = await fetch(
            'controller/produtos/listarProdutos.php', {
                method: 'get'
            });
        const response = await request.json();
        const conteudoProduto = document.getElementById('conteudo-produto');
        console.log(response.dados);


        const montarLinha = (abertura, conteudo, fechamento) => {
            conteudoProduto.innerHTML += `${abertura}${conteudo}${fechamento}`;
        };
        console.log(response.dados);
        let aux = 0;
        let conteudoTemp = '';
        let aberturaTemp = '<div class="row">';
        let fechamentoTemp = '</div>';
        const total = response.dados.length;
        let count = 0;

        for await (const item of response.dados) {

            conteudoTemp += conteudo(item.id, item.nome, item.imagem, item.preco);

            if (aux === 2) {
                montarLinha(aberturaTemp, conteudoTemp, fechamentoTemp);
                conteudoTemp = '';
                aux = 0;
            } else if (count === total - 1) {
                montarLinha(aberturaTemp, conteudoTemp, fechamentoTemp);
                conteudoTemp = '';
                aux = 0;
            } else {
                aux++;
            }
            count++;
        }
    }
    $(document).ready(function() {
        carregarDados()
    });
</script>