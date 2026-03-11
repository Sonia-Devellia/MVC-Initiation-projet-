<link href="static/css/rechercher.css" rel="stylesheet" />

<h1 class="titre-page mb-4">Recherche d'utilisateur</h1>

<div class="card shadow-sm mx-auto recherche-card">
    <div class="card-header text-center">
        Rechercher un utilisateur
    </div>
    <div class="card-body">

        <!-- Champ de recherche -->
        <div class="mb-3">
            <label for="champRecherche" class="form-label">Prénom</label>
            <input type="text"
                   class="form-control"
                   id="champRecherche"
                   placeholder="Tapez un prénom..." />
        </div>

        <!-- Zone de résultats -->
        <div id="resultat"></div>

    </div>
</div>

<script>
    // On écoute chaque frappe dans le champ de recherche
    document.getElementById("champRecherche").addEventListener("keyup", function () {

        const prenom = this.value; // récupère la valeur saisie
        const resultat = document.getElementById("resultat");

        // Si le champ est vide → vide le résultat
        if (prenom.length === 0) {
            resultat.innerHTML = "";
            return;
        }

        // Requête AJAX avec FETCH vers le contrôleur
        fetch("?action=rechercher&prenom=" + prenom)
            .then(response => response.json()) // convertit la réponse en JSON
            .then(data => {

                // Si aucun résultat
                if (data.length === 0) {
                    resultat.innerHTML = "<p class='text-muted'>Aucun résultat.</p>";
                    return;
                }

                // Construit la liste des résultats
                let html = "<ul class='list-group'>";
                data.forEach(user => {
                    html += `<li class='list-group-item'>${user.prenom} ${user.nom}</li>`;
                });
                html += "</ul>";

                resultat.innerHTML = html;
            });
    });
</script>