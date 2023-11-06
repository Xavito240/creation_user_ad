<?php
if (isset($_POST['ldap_server'])) {
  $ldap_server = $_POST['ldap_server'];
  $ldap_admin_username = $_POST['ldap_user_ad'];
  $ldap_admin_password = $_POST['mdp_admin'];
  $nom_domaine = $_POST['nom_domaine'];
  $sufix = $_POST['sufix'];

  $ds = ldap_connect("ldap://$ldap_server");

  if ($ds) {
      
      ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
      ldap_bind($ds, "cn=$ldap_admin_username,CN=Users,dc=$nom_domaine,dc=$sufix", "$ldap_admin_password") or die("Impossible de s'authentifier");

      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $userAccountControl = $_POST['userAccountControl'];

      $info["sn"]="$first_name";
      $info["givenname"]="$username";
      $info["displayname"]="$first_name $last_name";
      $info["name"]="$first_name $last_name";
      $info["userprincipalname"]= "$first_name.$last_name@$nom_domaine.$sufix";
      $info["mail"] = "$first_name.$last_name@$nom_domaine.$sufix";
      $info["samaccountname"]= "$last_name.$first_name";

      // vérifier la valeur sélectionnée pour l'activation du compte
      if ($userAccountControl == "544") {
        $info["userAccountControl"] = 544;
      } else {
        $info["userAccountControl"] = 514;
      }
      
      $objectclass = array("top", "person", "organizationalPerson", "user");
      $info["objectclass"]= $objectclass;

      // Ajoute les données au dossier
      $r=ldap_add($ds, "cn=$username, cn=Users, DC=$nom_domaine, DC=$sufix", $info);

      if ($r) {
        echo "Le compte a été crée avec succès. <a href='principale.php'>Retourner en arrière</a>";
      } else {
        echo "Une erreur s'est produite lors de la création du compte.";
        
      }
      ldap_close($ds); 
    
    } else {
      echo 'Impossible de se connecter au serveur LDAP';
    }
}
?>

<!-- <a href="ya.php"  onclick="history.back(); return false;">Retourner en arrière</a> -->







