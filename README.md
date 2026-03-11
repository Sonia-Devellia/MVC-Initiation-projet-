# Projet MVC PHP - Initiation

Projet réalisé dans le cadre d'un cours de développement web.  
L'objectif est d'apprendre à structurer une application PHP selon le design pattern **MVC (Modèle - Vue - Contrôleur)**.

---

## Structure du projet

```
site/
├── cls/
│   ├── config.php          → Configuration (RACINE, BDD)
│   └── route.php           → Classe Route (routage)
├── controleur/
│   ├── connect.php         → Classe DbConnect (connexion PDO)
│   ├── intro_ctl.php       → Contrôleur page d'accueil
│   ├── page1_ctl.php       → Contrôleur page 1 (articles)
│   ├── page2_ctl.php       → Contrôleur page 2 (utilisateurs)
│   ├── login_ctl.php       → Contrôleur login
│   ├── logout_ctl.php      → Contrôleur logout
│   └── page404_ctl.php     → Contrôleur page 404
├── modele/
│   ├── data.json           → Données JSON (titres des pages)
│   ├── page1_bd.php        → Modèle articles (classe DBPage1)
│   ├── page2_bd.php        → Modèle utilisateurs (classe DBPage2)
│   ├── login_bd.php        → Modèle login (classe DBLogin)
│   └── page404_bd.php      → Modèle 404
├── vue/
│   ├── entete.php          → En-tête commune (Bootstrap + session)
│   ├── pied.php            → Pied de page commun
│   ├── intro_vue.php       → Vue page d'accueil
│   ├── page1_vue.php       → Vue articles
│   ├── page2_vue.php       → Vue utilisateurs
│   ├── login_vue.php       → Vue formulaire connexion
│   └── page404_vue.php     → Vue page 404
├── static/
│   ├── css/                → Fichiers CSS (page1, page2, login...)
│   └── images/             → Images et avatars
└── index.php               → Contrôleur principal (point d'entrée)
```

---

## Fonctionnement MVC

Toutes les requêtes passent par **`index.php`** qui lance le routage :

```
URL : index.php?action=page1
        ↓
index.php → session_start() + Route
        ↓
route.php → switch($action) → new Page1Controller()
        ↓
page1_ctl.php → DBPage1::getArticlesContent()
        ↓
page1_bd.php → SELECT * FROM article
        ↓
page1_vue.php → affichage HTML
```

---

## Base de données

### Table `article`
| Colonne | Type |
|---|---|
| id | int (PK, auto-increment) |
| title | varchar(150) |
| author | varchar(150) |
| content | text |
| picture | varchar(255) |
| created_at | timestamp |

### Table `user`
| Colonne | Type |
|---|---|
| id | int (PK, auto-increment) |
| nom | varchar(100) |
| prenom | varchar(100) |
| email | varchar(150) |
| password | varchar(255) |
| avatar | varchar(255) |
| paswd | varchar(255) |

---

## Fonctionnalités

- Architecture **MVC** avec routage par `$_GET["action"]`
- Routage via une **classe Route** avec `switch`
- Connexion BDD via **PDO** (classe abstraite `DbConnect`)
- Affichage des **articles** depuis la BDD (page1)
- Affichage des **utilisateurs** depuis la BDD (page2)
- Import de données **JSON** (`data.json`)
- **Authentification** (login / logout) avec sessions PHP
- Mots de passe **hachés** avec `password_hash()` et vérifiés avec `password_verify()`
- Affichage du **nom/prénom** de l'utilisateur connecté sur toutes les pages
- Interface **Bootstrap 5** responsive
- Page **404** pour les actions inconnues

---

## Connexion

Les 3 utilisateurs de test ont tous le même mot de passe :

```
Mot de passe : superSecret
```

| Prénom | Nom | Email |
|---|---|---|
| Bob | Léponge | robert@sponge.us |
| Marie | Curry | marie@spice.in |
| Marco | Paulo | paulo@discover.it |

---

## Technologies utilisées

| Technologie | Usage |
|---|---|
| PHP 8 | Langage principal |
| MySQL | Base de données |
| PDO | Accès à la base de données |
| Bootstrap 5 | Interface graphique |
| JSON | Données statiques |
| Git | Versionnement |

---

## Notions apprises

- Design pattern **MVC**
- **Programmation Orientée Objet** (classes, héritage, méthodes statiques)
- **PDO** et requêtes préparées (sécurité anti-injection SQL)
- **Sessions PHP** (`session_start`, `$_SESSION`)
- Hachage de mots de passe (`password_hash`, `password_verify`)
- Routage d'application web
- Intégration **Bootstrap 5**
- Gestion de données **JSON**
- Versionnement avec **Git**
