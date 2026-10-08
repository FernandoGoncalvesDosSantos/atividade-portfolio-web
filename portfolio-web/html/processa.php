<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <title>Mensagem Recebida</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />
</head>

<body class="d-flex flex-column min-vh-100">

<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #000;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../html/index.html">INÍCIO</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            TÓPICOS
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../html/minhahistoria.html">Minha História</a></li>
                            <li><a class="dropdown-item" href="../html/minhahabilidade.html">Minhas Habilidades</a></li>
                            <li><a class="dropdown-item" href="../html/planos.futuros.html">Planos Futuros</a></li>
                            <li><a class="dropdown-item" href="../html/falecomigo.html">Fale Comigo</a></li>
                            <li><a class="dropdown-item" href="../html/indique.php">Indique</a></li>
                        </ul>

                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container mt-5 pt-5 flex-grow-1">

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $texto = $_POST["texto"];

    echo "

    <div class='p-4 bg-dark text-white rounded mt-4'>

        <h1>Mensagem Recebida!</h1>

        <p>Olá, <strong>$nome</strong>.</p>

        <p>Recebi sua mensagem e entrarei em contato em breve.</p>

        <p><strong>E-mail:</strong> $email</p>

        <p><strong>Mensagem:</strong> $texto</p>

        <a href='../html/falecomigo.html' class='btn btn-light mt-3'>
            Voltar
        </a>

    </div>

    ";

} else {
    echo "<h3 class='mt-4'>Acesso inválido. Envie o formulário primeiro.</h3>";
}

?>
</main>

<!-- FOOTER FIXO NO FINAL -->
<footer class="bg-dark text-white text-center py-3 mt-auto">
    <p class="mb-1 fw-bold">Meu Portfólio</p>
    <p class="mb-0 small">© 2026 Todos os direitos reservados</p>
</footer>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>