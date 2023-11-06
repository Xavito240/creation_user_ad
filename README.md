# README - Création d'utilisateur Active Directory

Ce projet contient un formulaire HTML et un script PHP pour la création d'un utilisateur dans Active Directory. Le formulaire collecte les informations nécessaires pour créer un utilisateur, tandis que le script PHP traite les données et les enregistre dans Active Directory.

## Contenu du projet

- `index.html` : Un formulaire HTML pour saisir les informations de l'utilisateur.
- `ajout_user.php` : Un script PHP pour traiter les données du formulaire et créer un utilisateur dans Active Directory.
- `style.css` : Une feuille de style CSS (actuellement vide, prête à être personnalisée).

## Utilisation

1. Ouvrez le fichier `index.html` dans un navigateur web pour accéder au formulaire de création d'utilisateur Active Directory.
2. Remplissez les champs requis, y compris l'adresse LDAP, les informations de l'administrateur, les détails de l'utilisateur, et l'état de compte.
3. Cliquez sur le bouton "Ajouter l'utilisateur" pour soumettre le formulaire.

## Fonctionnement du script PHP

Le script PHP (`ajout_user.php`) effectue les opérations suivantes :

1. Vérification des données POST pour l'adresse LDAP, les informations d'administrateur, le nom de domaine, et le suffixe.
2. Établissement d'une connexion LDAP vers le serveur LDAP spécifié en utilisant les informations d'administrateur fournies.
3. Récupération des données du formulaire, telles que le prénom, le nom, le nom d'utilisateur, le mot de passe, l'adresse e-mail, et l'état de compte.
4. Construction d'un tableau `$info` contenant les attributs de l'utilisateur.
5. Définition de l'attribut "userAccountControl" en fonction de la valeur sélectionnée dans le formulaire.
6. Définition des valeurs de "objectClass" pour le nouvel utilisateur.
7. Tentative d'ajout du nouvel utilisateur dans Active Directory en utilisant `ldap_add`.
8. Affichage de messages de succès ou d'erreur en fonction du résultat de la création de l'utilisateur.
9. Fermeture de la connexion LDAP.

Assurez-vous de vérifier la précision des informations de serveur LDAP et des informations d'administrateur. De plus, la validation des entrées utilisateur est importante pour des raisons de sécurité.

@Xavito
