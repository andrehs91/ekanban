<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? "$title - " : "" ?>Kanban</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/kanban.css">
    <link rel="icon" href="img/favicon.svg" type="image/svg+xml">
</head>
<body>
    <header class="bg-dark text-white">
        <nav class="container navbar navbar-expand-sm navbar-dark">
            <a class="navbar-brand fw-bold" href="/">Kanban</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav">
                <?php $menu = [
                    "/projetos" => "Projetos",
                    "/tarefas" => "Tarefas",
                    "/relatorios" => "Relatórios"
                ] ?>
                <?php foreach ($menu as $uri => $text): ?>
                    <li class="nav-item">
                        <?php $css = isset($rota['uri']) && $route["uri"] == $uri ? "active" : ""; ?>
                        <a class="nav-link <?= $css ?>" href="<?= $uri ?>"><?= $text ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container py-3">