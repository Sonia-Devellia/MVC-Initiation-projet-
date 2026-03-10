<link href="static/css/page2.css" rel="stylesheet" />

<?php
$dataJson = json_decode($data, true);
?>

<h1 class="titre-page mb-4"><?= $dataJson["page2"] ?></h1>

<?php
if (!is_array($users)) {
    echo "<h3>Aucun utilisateur !</h3>";
} else {
    foreach ($users as $index => $current_user) {
        $avatarFile = "avatar" . strtolower($current_user["prenom"]) . ".jpg";
?>

        <div class="card mb-4 shadow-sm">
            <div class="card-header text-center">
                Utilisateur n°<?= $index + 1 ?>
            </div>
            <div class="card-body d-flex align-items-center gap-4">

                <!-- Avatar -->
                <img src="static/images/<?= $avatarFile ?>"
                    alt="avatar de <?= $current_user["prenom"] ?>"
                    class="img-avatar" />

                <!-- Nom Prénom -->
                <p class="flex-grow-1 mb-0">
                    <?= $current_user["prenom"] ?> <?= $current_user["nom"] ?>
                </p>

                <!-- Email -->
                <div class="auteur text-center">
                    <?= $current_user["email"] ?>
                </div>

            </div>
        </div>

<?php }
} ?>