WEB_BTP/
├── home/
│   ├── index.html
│   ├── images/
│   └── styles.css
├── contenu/
│   ├── main.html
│   ├── script.js   
│   └── style.css
├── connection/
│   └── Connecter.php
├── compte/
│   ├── inscreption/
│   │   ├── inscreption.html
│   │   ├── recupre.php
│   │   └── style.css
│   └── login/
│       ├── login.html
│       ├── verfier.php
│       └── style.css
│   └── passwordObliee/
│       ├── pwd.html
│       ├── modifier.php
│       └── style.css
├── function/
│   ├── db.php
│   ├── Ajouter/
│   │   ├── ajouter_certification.php
│   │   ├── ajouter_equipe.php
│   │   ├── ajouter_projet.php
│   │   └── ajouter_service.php
│   ├── form/
│   │   ├── Certafications.html
│   │   ├── Contacts.html
│   │   ├── Equipes.html
│   │   ├── Projets.html
│   │   └── Services.html
│   ├── Modifier/
│   │   ├── modifier_certafication.php
│   │   ├── modifier_equipe.php
│   │   ├── modifier_projet.php
│   │   └── modifier_service.php
│   ├── Styles/
│   │   ├── styleCer.css
│   │   ├── styleEqu.css
│   │   ├── styleSer.css
│   │   └── stylePro.css
│   ├── FormModefier/
│   │   ├── formCer.html
│   │   ├── formEqu.html
│   │   ├── formPro.html
│   │   └── formSer.html
│   ├── Supprimer/
│   │   ├── supprimer_certification.php
│   │   ├── supprimer_equipe.php
│   │   ├── supprimer_projet.php
│   │   └── supprimer_service.php
│   ├── table/
│   │   ├── tCertafications.php
│   │   ├── tEquipes.php
│   │   ├── tProjets.php
│   │   └── tServices.php
└── XML/
    ├── xml.html
    ├── styles.css
    ├── script.js
    ├── load_exercise.php
    └── files/
        ├── TD1/
        ├── TD2/
        └── TD3/


Détails du Schéma

   # home/ : Contient la page d'accueil (index.html), un dossier pour les images (images/), et une feuille de style (styles.css).
   # contenu/ : Contient le fichier principal (main.html), un script JavaScript (script.js), et une feuille de style (style.css).
   # connection/ : Contient le script de connexion (Connecter.php).
   # compte/ : Contient des sous-dossiers pour l'inscription, la connexion, et la récupération de mot de passe, chacun avec ses propres fichiers HTML, PHP et CSS.
        # inscreption/ : Contient le fichier d'inscription (inscreption.html), le script de récupération (recupre.php), et une feuille de style (style.css).
        # login/ : Contient le fichier de connexion (login.html), le script de vérification (verfier.php), et une feuille de style (style.css).
        # passwordObliee/ : Contient le fichier de récupération de mot de passe (pwd.html), le script de modification (modifier.php), et une feuille de style (style.css).
    # function/ : Contient les scripts PHP pour différentes opérations comme ajouter, modifier, supprimer des données, ainsi que des styles spécifiques et des formulaires.
        # Ajouter/ : Contient les scripts pour ajouter des certifications, des équipes, des projets et des services.
        # form/ : Contient des fichiers HTML pour les formulaires de certifications, contacts, équipes, projets et services.
        # Modifier/ : Contient les scripts pour modifier des certifications, des équipes, des projets et des services.
        # Styles/ : Contient des fichiers CSS pour différents composants.
        # FormModefier/ : Contient des fichiers HTML pour les formulaires de modification.
        # Supprimer/ : Contient les scripts pour supprimer des certifications, des équipes, des projets et des services.
        # table/ : Contient des fichiers PHP pour générer des tableaux de certifications, équipes, projets et services.
    # XML/ : Contient des fichiers pour travailler avec XML, incluant un fichier HTML, CSS, JavaScript et PHP pour charger des exercices, ainsi que des sous-dossiers pour différents TD.

-----------------------------------------------------------------------------------------------------------------------------------------------------
  ____________________________________________________ Visiter le site local WEB_BTP______________________________________________________________

1. home
   ├── Accéder à la page d'accueil
   │   └── URL: http://localhost/WEB_BTP/home/index.html
   ├── Naviguer à travers les sections 
   │   ├── Services
   │   ├── contacts
   │   └── équipes
       └── projets      
   └── Utiliser le menu de navigation principal
       ├── Bouton "Connexion"
       └── Bouton "XML"

2. Main(les fontionalités principale)
   ├── Accéder à la page main d'apres la verfication de login 
   │   └── URL: http://localhost/WEB_BTP/contenu/main.html
   ├── Parcourir les catégories 
   │   ├── Certifications
   │   ├── Équipes
   │   ├── Projets
   │   └── Services

3. Compte
   ├── Inscription
   │   ├── Accéder à la page d'inscription
   │   │   └── URL: http://localhost/WEB_BTP/compte/inscreption/inscreption.html
   │   ├── Remplir le formulaire d'inscription
   │   └── Soumettre le formulaire
   ├── Connexion
   │   ├── Accéder à la page de connexion
   │   │   └── URL: http://localhost/WEB_BTP/compte/login/login.html [mot de passe=loul , username=youssef]
   │   ├── Saisir les informations de connexion
   │   └── Soumettre le formulaire de connexion
   ├── Mot de passe oublié
   │   ├── Accéder à la page de récupération de mot de passe
   │   │   └── URL: http://localhost/WEB_BTP/compte/passwordObliee/pwd.html
   │   ├── Saisir username
   │   └── ajouter un nouvelle password

4. Ajouter du Contenu
   ├── Ajouter une certification
   │   ├── Accéder à la page d'ajout de certification
   │   │   └── URL: http://localhost/WEB_BTP/function/Ajouter/ajouter_certification.php
   │   ├── Remplir les détails de la certification
   │   └── Soumettre le formulaire
   ├── Ajouter une équipe
   │   ├── Accéder à la page d'ajout d'équipe
   │   │   └── URL: http://localhost/WEB_BTP/function/Ajouter/ajouter_equipe.php
   │   ├── Remplir les détails de l'équipe
   │   └── Soumettre le formulaire
   ├── Ajouter un projet
   │   ├── Accéder à la page d'ajout de projet
   │   │   └── URL: http://localhost/WEB_BTP/function/Ajouter/ajouter_projet.php
   │   ├── Remplir les détails du projet
   │   └── Soumettre le formulaire
   ├── Ajouter un service
   │   ├── Accéder à la page d'ajout de service
   │   │   └── URL: http://localhost/WEB_BTP/function/Ajouter/ajouter_service.php
   │   ├── Remplir les détails du service
   │   └── Soumettre le formulaire

5. Modifier du Contenu
   ├── Modifier une certification
   │   ├── Accéder à la page de modification de certification
   │   │   └── URL: http://localhost/WEB_BTP/function/Modifier/modifier_certification.php
   │   ├── Mettre à jour les détails de la certification
   │   └── Soumettre les modifications
   ├── Modifier une équipe
   │   ├── Accéder à la page de modification d'équipe
   │   │   └── URL: http://localhost/WEB_BTP/function/Modifier/modifier_equipe.php
   │   ├── Mettre à jour les détails de l'équipe
   │   └── Soumettre les modifications
   ├── Modifier un projet
   │   ├── Accéder à la page de modification de projet
   │   │   └── URL: http://localhost/WEB_BTP/function/Modifier/modifier_projet.php
   │   ├── Mettre à jour les détails du projet
   │   └── Soumettre les modifications
   ├── Modifier un service
   │   ├── Accéder à la page de modification de service
   │   │   └── URL: http://localhost/WEB_BTP/function/Modifier/modifier_service.php
   │   ├── Mettre à jour les détails du service
   │   └── Soumettre les modifications

6. Supprimer du Contenu
   ├── Supprimer une certification
   │   ├── Accéder à la page de suppression de certification
   │   │   └── URL: http://localhost/WEB_BTP/function/Supprimer/supprimer_certification.php
   │   ├── Confirmer la suppression
   │   └── Soumettre
   ├── Supprimer une équipe
   │   ├── Accéder à la page de suppression d'équipe
   │   │   └── URL: http://localhost/WEB_BTP/function/Supprimer/supprimer_equipe.php
   │   ├── Confirmer la suppression
   │   └── Soumettre
   ├── Supprimer un projet
   │   ├── Accéder à la page de suppression de projet
   │   │   └── URL: http://localhost/WEB_BTP/function/Supprimer/supprimer_projet.php
   │   ├── Confirmer la suppression
   │   └── Soumettre
   ├── Supprimer un service
   │   ├── Accéder à la page de suppression de service
   │   │   └── URL: http://localhost/WEB_BTP/function/Supprimer/supprimer_service.php
   │   ├── Confirmer la suppression
   │   └── Soumettre

7. Consulter les Données
   ├── Consulter les certifications
   │   └── URL: http://localhost/WEB_BTP/function/table/tCertafications.php
   ├── Consulter les équipes
   │   └── URL: http://localhost/WEB_BTP/function/table/tEquipes.php
   ├── Consulter les projets
   │   └── URL: http://localhost/WEB_BTP/function/table/tProjets.php
   └── Consulter les services
       └── URL: http://localhost/WEB_BTP/function/table/tServices.php

8. Section XML
   ├── Accéder à la section XML
   │   └── URL: http://localhost/WEB_BTP/XML/xml.html
   ├── Explorer les fichiers XML
   │   ├── TD1/
   │   ├── TD2/
   │   └── TD3/
   ├── Utiliser le fichier de style
   │   └── styles.css
   ├── Exécuter le script JavaScript
   │   └── script.js
   ├── Charger des exercices
   │   └── load_exercise.php
------------------------------------------------------------------------------------------------------------------------------------------------------
     [Accueil (index.html)]                ────────────────>      [Connexion]             ────────────────>     [fonctionalité (main.html)]

  http://localhost/WEB_BTP/home/index.html          http://localhost/WEB_BTP/compte/login/login.html          http://localhost/WEB_BTP/contenu/main.html

                                                       {username = youssef }{password = loul}                 {[modifier,supprimer ,afficher,ajouter] les services,les certifications,les projects et les equipes }
      


