<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Créer un utilisateur Active Directory</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
        
    </style>
</head>
<body>
    <h1>Créer un utilisateur Active Directory</h1>
        <form method="post" action="ajout_user.php">
            <fieldset>
                <legend>Information Serveur</legend>
                <label for="ldap_server">adresse LDAP :</label>
                <input type="text" name="ldap_server" id="ldap_server" required><br>
                <label for="ldap_user_ad">Administrateurs :</label>
                <input type="text" name="ldap_user_ad" id="ldap_user_ad" required><br>
        
                <label for="mdp_admin">mot de passe admin :</label>
                <input type="password" name="mdp_admin" id="mdp_admin" required><br>
        
                <label for="nom_domaine">nom de domaine :</label>
                <input type="text" name="nom_domaine" id="nom_domaine" required><br>
        
                <label for="sufix">lan ou local :</label>
                <input type="text" name="sufix" id="sufix" required><br>
            </fieldset>
        
            <fieldset>
                <legend>Information Utilisateurs</legend>
                <label for="first_name">Prénom :</label>
                <input type="text" name="first_name" id="first_name" required><br>
        
                <label for="last_name">Nom :</label>
                <input type="text" name="last_name" id="last_name" required><br>
        
                <label for="username">Nom d'ouverture de la session:</label>
                <input type="text" name="username" id="username" required><br>
        
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" required><br>
        
                <label for="email">Adresse e-mail :</label>
                <input type="email" name="email" id="email" required><br>
        

                
            </fieldset>
            <fieldset>
                <legend>Gestion compte</legend>
        
                <label for="userAccountControl">Activation du compte :</label>
                <select name="userAccountControl" id="userAccountControl">
                    <option  value="544">Activé</option>
                    <option  value="512">Désactivé</option>
                </select>

            </fieldset>
            <div class="form-actions">            
                <input type="submit" value="Ajouter l'utilisateur">
                </div>


            </fieldset>
            
            

        </form>
    </body>