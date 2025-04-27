# 🌐 WEB_BTP — Gestion Complète des Services BTP

**WEB_BTP** est une plateforme web moderne développée pour gérer efficacement les certifications, équipes, projets et services dans le secteur du BTP.  
Construite avec **HTML5**, **CSS3**, **JavaScript**, **PHP**, et **MySQL**, elle est optimisée pour un déploiement rapide sur serveur local **Apache** via **XAMPP** ou **WAMP**.

---

## 🧩 Sommaire

- [Structure du projet](#-structure-du-projet)
- [Fonctionnalités principales](#-fonctionnalités-principales)
- [Parcours utilisateur](#-parcours-utilisateur)
- [Technologies utilisées](#-technologies-utilisées)
- [Installation et configuration](#-installation-et-configuration)
- [Contribuer](#-contribuer)
- [Remerciements](#-remerciements)

---

## 📁 Structure du projet

```
WEB_BTP/
├── home/               # Accueil du site
├── database/           #base de donnees du site
├── contenu/            # Tableau de bord utilisateur
├── connection/         # Script de connexion base de données
├── compte/             # Inscription, Connexion, Mot de passe oublié
├── function/           # Opérations CRUD et gestionnaires
├── images/             # Captures d'écran
└── README.md           # Documentation du projet
```

---

## 🚀 Fonctionnalités principales

### 🏠 Page d'accueil
- Présentation des services, équipes, projets.
- Navigation intuitive.

> ![Accueil](./images/accueil_site.png)

---

### 🔐 Système d'authentification sécurisé
- Connexion via login/mot de passe.
- Validation sécurisée côté serveur.

> ![Connexion](./images/connexion_site.png)

---

### 📋 Tableau de bord - Main
- Vue centralisée pour accéder aux fonctionnalités de gestion :
  - Certifications
  - Équipes
  - Projets
  - Services

> ![Interface Principale](./images/main_site.png)

---

### ➕ Gestion de contenu
- Ajouter, modifier, supprimer des éléments de manière dynamique.

> ![Ajouter du Contenu](./images/ajouter_contenu.png)
> ![Modifier Contenu](./images/modifier_contenu.png)
> ![Supprimer Contenu](./images/supprimer_contenu.png)

---

### 📑 Consultation de données
- Consultation structurée sous forme de tableaux dynamiques.

> ![Consulter Données](./images/consulter_contenu.png)

---

## 📌 Parcours utilisateur

```mermaid
graph LR
A[Accueil] --> B[Connexion]
B --> C[Tableau de bord principal]
C --> D[Ajouter | Modifier | Supprimer | Consulter les données]
```

---

## 🛠️ Technologies utilisées

| Technologie   | Rôle                   |
| ------------- | ----------------------- |
| HTML5 / CSS3  | Frontend Design          |
| JavaScript    | Interactions utilisateur |
| PHP 7+        | Backend Server           |
| MySQL         | Base de données          |
| Apache (XAMPP/WAMP) | Serveur local |

---

## ⚙️ Installation et configuration

1. Cloner le projet :
   ```bash
   git clone https://github.com/votre-utilisateur/WEB_BTP.git
   ```

2. Copier dans le dossier `htdocs/` de XAMPP/WAMP.

3. Démarrer **Apache** et **MySQL**.

4. Configurer la base de données :
   - Créer une base `web_btp`.
   - Importer le script SQL (non fourni ici).

5. Accéder à :
   ```url
   http://localhost/WEB_BTP/home/index.html
   ```

---

## 🤝 Contribuer

Les contributions sont les bienvenues !

- Forkez le projet
- Créez une branche (`git checkout -b feature/Ajout`)
- Commitez vos changements (`git commit -m 'Ajout d'une fonctionnalité'`)
- Pushez (`git push origin feature/Ajout`)
- Ouvrez une Pull Request

---

## 🙏 Remerciements

Merci à tous les utilisateurs et contributeurs qui soutiennent **WEB_BTP**.

> ⭐ N'oubliez pas de liker le projet si vous le trouvez utile !

---

