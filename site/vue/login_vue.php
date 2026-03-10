<link href="static/css/login.css" rel="stylesheet" />

<?php
$dataJson = json_decode($data, true);
?>

<h1 class="titre-page mb-4"><?= $dataJson["login"] ?></h1>

<div class="card shadow-sm mx-auto login-card">
    <div class="card-header text-center">
        Connexion
    </div>
    <div class="card-body">

        <!-- Affiche le message d'erreur -->
        <?php if (!empty($erreur)) { ?>
            <div class="alert alert-danger">
                <?= $erreur ?>
            </div>
        <?php } ?>

        <form action="?action=login" method="POST">

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email"
                       class="form-control"
                       id="email"
                       name="email"
                       placeholder="Votre email" />
            </div>

            <!-- Mp -->
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password"
                       class="form-control"
                       id="password"
                       name="password"
                       placeholder="Votre mot de passe" />
            </div>

            <!-- Btn -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    Se connecter
                </button>
            </div>

        </form>

    </div>
</div>