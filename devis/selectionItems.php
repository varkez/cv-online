
<html>
<form id="form">
  <div>
    <select name="num[]">
        <option value="50">choix1</option>
        <option value="100">choix2</option>
        <option value="150">choix3</option>
        <option value="200">choix4</option>
        <option value="250">choix5</option>
    </select><br />
    <label><input type="checkbox" name="num[]" value="5" /> 5</label><br />
    <label><input type="checkbox" name="num[]" value="10" /> 10</label><br />
    <label><input type="checkbox" name="num[]" value="12" /> 12</label><br />
    <label><input type="checkbox" name="num[]" value="15" /> 15</label><br />
    <input type="submit" name="valider" id="valider" value="Ok" />
  </div>
   
  <div id="result">
  </div>
</form>
    </html>
<?php
if($username&&$password&&$repeatpassword&&$nom_cli&&$prenom_cli&&$adresse_cli &&$ville_cli &&$cp_cli &&$mail) 
{ 
if($password==$repeatpassword) 
{ 
require_once("connexion.php"); // se référer à ... 
$req ="SELECT * FROM client WHERE username='$username'";

$reg = mysql_query($req); 
$rows = mysql_num_rows($reg); 
if($rows==0) 
{ 
$req="INSERT INTO client VALUES ('','$username','$nom_cli','$prenom_cli','$adresse_cli','$ville_cli','$cp_cli', '$mail', 'sword')"; 
echo $req; 
$query = mysql_query($req)or die (mysql_error()) ; 
}else echo " Ce pseudo n'est pas disponible " ; 
}else echo "les deux password doivent être identiques"; 
}else echo "Veuillez saisir tous les champs" ; 
} 
?>