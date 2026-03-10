<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjetMVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<!-- Barre de navigation -->
<nav class="navbar navbar-light bg-light px-3 mb-4 rounded">

    <span class="navbar-brand fw-bold">Projet De Cours MVC</span>

    <div class="d-flex gap-2">
        <a href="?action=page1" class="btn btn-sm btn-outline-primary">Page 1</a>
        <a href="?action=page2" class="btn btn-sm btn-outline-secondary">Page 2</a>
    </div>

    <!-- Affichage de l'utilisateur connecté -->
    <div>
        <?php if (isset($_SESSION['user'])) { ?>
            <!-- connecté -->
            <span class="text-success fw-bold">
                <?= $_SESSION['user']['prenom'] ?> <?= $_SESSION['user']['nom'] ?>
            </span>
            <a href="?action=logout" class="btn btn-sm btn-outline-danger ms-2">Déconnexion</a>
        <?php } else { ?>
            <!-- Pas connecté -->
            <a href="?action=login" class="btn btn-sm btn-outline-success">Connexion</a>
        <?php } ?>
    </div>

</nav>