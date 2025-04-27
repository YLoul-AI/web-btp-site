
# WEB_BTP

Bienvenue sur le projet **WEB_BTP**, une application web permettant de gérer des informations liées à des certifications, des équipes, des projets et des services. Ce projet utilise des technologies telles que HTML, CSS, JavaScript et PHP pour fournir une interface utilisateur interactive et un système de gestion de contenu dynamique.

## Structure du Projet

Le projet est organisé en plusieurs sections principales, chacune ayant un rôle spécifique. Voici un aperçu détaillé de la structure du répertoire du projet :

```
WEB_BTP/
├── home/
│   ├── index.html           # Page d'accueil
│   ├── images/              # Dossier contenant les images de la page d'accueil
│   └── styles.css           # Feuille de style pour la page d'accueil
├── contenu/
│   ├── main.html            # Page principale après connexion
│   ├── script.js            # Script JavaScript pour la page principale
│   └── style.css            # Feuille de style pour la page principale
├── connection/
│   └── Connecter.php        # Script PHP pour la connexion à la base de données
├── compte/
│   ├── inscription/         # Page d'inscription des utilisateurs
│   │   ├── inscription.html
│   │   ├── recupre.php
│   │   └── style.css
│   ├── login/               # Page de connexion des utilisateurs
│   │   ├── login.html
│   │   ├── verfier.php
│   │   └── style.css
│   └── passwordObliee/      # Page de récupération de mot de passe
│       ├── pwd.html
│       ├── modifier.php
│       └── style.css
├── function/
│   ├── db.php               # Script de connexion à la base de données
│   ├── Ajouter/             # Scripts pour ajouter des informations
│   │   ├── ajouter_certification.php
│   │   ├── ajouter_equipe.php
│   │   ├── ajouter_projet.php
│   │   └── ajouter_service.php
│   ├── form/                # Formulaires HTML pour l'ajout d'informations
│   │   ├── Certafications.html
│   │   ├── Contacts.html
│   │   ├── Equipes.html
│   │   ├── Projets.html
│   │   └── Services.html
│   ├── Modifier/            # Scripts pour modifier des informations
│   │   ├── modifier_certafication.php
│   │   ├── modifier_equipe.php
│   │   ├── modifier_projet.php
│   │   └── modifier_service.php
│   ├── Styles/              # Feuilles de style spécifiques aux différentes pages
│   │   ├── styleCer.css
│   │   ├── styleEqu.css
│   │   ├── styleSer.css
│   │   └── stylePro.css
│   ├── FormModefier/        # Formulaires pour modifier des informations
│   │   ├── formCer.html
│   │   ├── formEqu.html
│   │   ├── formPro.html
│   │   └── formSer.html
│   ├── Supprimer/           # Scripts pour supprimer des informations
│   │   ├── supprimer_certification.php
│   │   ├── supprimer_equipe.php
│   │   ├── supprimer_projet.php
│   │   └── supprimer_service.php
│   ├── table/               # Tableaux pour afficher les informations
│   │   ├── tCertafications.php
│   │   ├── tEquipes.php
│   │   ├── tProjets.php
│   │   └── tServices.php


## Fonctionnalités

Le projet propose plusieurs fonctionnalités pour la gestion des utilisateurs et du contenu :

### 1. **Page d'Accueil**
- **URL**: [Accéder à l'accueil](http://localhost/WEB_BTP/home/index.html)
- Permet d'accéder à la page d'accueil avec un menu de navigation pour accéder aux différentes sections.

### 2. **Page Principale (Post-Connexion)**
- **URL**: [Page principale](http://localhost/WEB_BTP/contenu/main.html)
- Cette page est accessible après la connexion et permet de gérer les sections suivantes :
  - **Certifications**
  - **Équipes**
  - **Projets**
  - **Services**

### 3. **Gestion du Compte Utilisateur**
- **Inscription**: [Page d'inscription](http://localhost/WEB_BTP/compte/inscreption/inscreption.html)
  - Remplissez le formulaire pour créer un compte utilisateur.
- **Connexion**: [Page de connexion](http://localhost/WEB_BTP/compte/login/login.html)
  - Saisissez votre nom d'utilisateur et mot de passe pour accéder à votre compte (Exemple: utilisateur = `youssef`, mot de passe = `loul`).
- **Mot de Passe Oublié**: [Page de récupération de mot de passe](http://localhost/WEB_BTP/compte/passwordObliee/pwd.html)
  - Entrez votre nom d'utilisateur pour récupérer votre mot de passe.

### 4. **Ajouter du Contenu**
- **Ajouter une certification**: [Formulaire d'ajout de certification](http://localhost/WEB_BTP/function/Ajouter/ajouter_certification.php)
- **Ajouter une équipe**: [Formulaire d'ajout d'équipe](http://localhost/WEB_BTP/function/Ajouter/ajouter_equipe.php)
- **Ajouter un projet**: [Formulaire d'ajout de projet](http://localhost/WEB_BTP/function/Ajouter/ajouter_projet.php)
- **Ajouter un service**: [Formulaire d'ajout de service](http://localhost/WEB_BTP/function/Ajouter/ajouter_service.php)

### 5. **Modifier du Contenu**
- **Modifier une certification**: [Formulaire de modification de certification](http://localhost/WEB_BTP/function/Modifier/modifier_certification.php)
- **Modifier une équipe**: [Formulaire de modification d'équipe](http://localhost/WEB_BTP/function/Modifier/modifier_equipe.php)
- **Modifier un projet**: [Formulaire de modification de projet](http://localhost/WEB_BTP/function/Modifier/modifier_projet.php)
- **Modifier un service**: [Formulaire de modification de service](http://localhost/WEB_BTP/function/Modifier/modifier_service.php)

### 6. **Supprimer du Contenu**
- **Supprimer une certification**: [Page de suppression de certification](http://localhost/WEB_BTP/function/Supprimer/supprimer_certification.php)
- **Supprimer une équipe**: [Page de suppression d'équipe](http://localhost/WEB_BTP/function/Supprimer/supprimer_equipe.php)
- **Supprimer un projet**: [Page de suppression de projet](http://localhost/WEB_BTP/function/Supprimer/supprimer_projet.php)
- **Supprimer un service**: [Page de suppression de service](http://localhost/WEB_BTP/function/Supprimer/supprimer_service.php)

### 7. **Consulter les Données**
- **Consulter les certifications**: [Voir les certifications](http://localhost/WEB_BTP/function/table/tCertafications.php)
- **Consulter les équipes**: [Voir les équipes](http://localhost/WEB_BTP/function/table/tEquipes.php)
- **Consulter les projets**: [Voir les projets](http://localhost/WEB_BTP/function/table/tProjets.php)
- **Consulter les services**: [Voir les services](http://localhost/WEB_BTP/function/table/tServices.php)
---

## Technologies Utilisées

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Base de données**: MySQL

---

## Installation

1. Clonez ce dépôt sur votre machine locale.
2. Placez-le dans votre dossier de serveur web (par exemple, `htdocs` pour XAMPP ou `www` pour WAMP).
3. Accédez à [localhost](http://localhost/) dans votre navigateur.

---

## Auteurs

- **Youssef Loul** - Créateur et développeur principal

---

## License

Ce projet est sous **licence MIT** - voir le fichier [LICENSE](LICENSE) pour plus de détails.


