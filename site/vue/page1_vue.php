<link href="static/css/page1.css" rel="stylesheet" />

<?php
$dataJson = json_decode($data, true);
?>

<h1 class="titre-page mb-4"><?= $dataJson["page1"] ?></h1>

<?php
if (!is_array($article)) {
    echo "<h3>Aucun article !</h3>";
} else {
    foreach ($article as $index => $current_article) {
?>

<div class="card mb-4 shadow-sm">
    <div class="card-header text-center">
        Article n°<?= $index + 1 ?>
    </div>
    <div class="card-body d-flex align-items-center gap-4">

        <img src="static/images/<?= $current_article["picture"] ?>"
             alt="<?= $current_article["title"] ?>"
             class="img-article" />

        <p class="flex-grow-1 mb-0"><?= $current_article["content"] ?></p>

        <div class="auteur text-center">
            <span class="text-muted">@</span><br />
            <strong><?= $current_article["author"] ?></strong>
        </div>

    </div>
</div>

<?php } } ?>
