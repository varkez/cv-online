<?php

$firstname = NULL; 
$lastname = NULL;
$email = NULL;
$message = NULL;


if (isset($_REQUEST['user_firstname']) && isset($_REQUEST['user_lastname']) && isset($_REQUEST['user_email']) && isset($_REQUEST['user_message'])){
//    var_dump($_POST);
        
$firstname = $_REQUEST['user_firstname'];
$lastname = $_REQUEST['user_lastname'];
$email = $_REQUEST['user_email'];
$message = $_REQUEST['user_message'];


try
{
//    $bdd = new PDO('mysql:host=franck-cariou.infos.st;dbname=varkez_franck-cariou;charset=utf8','','');
//    array(PDO::ATTR_ERRORMODE => PDO::ERRMODE_EXCEPTION));
}

catch(Exception $e)
        {
        die('Erreur : ' . $e->getMessage());
        }


$req = $bdd->prepare('INSERT INTO formulaire(firstname, lastname, email, message) VALUES(:firstname, :lastname, :email, :message)');
    
$req->execute(array(
':firstname' => $_REQUEST['user_firstname'],
':lastname' => $_REQUEST['user_lastname'],
':email' => $_REQUEST['user_email'],
':message' => $_REQUEST['user_message'],
));

}
// Test si le fichier a bien été envoyé et s'il n'y a pas d'erreur


if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{ 
        // Test si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
        
                // Test si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
            
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'pdf', 'doc', 'docx');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // valide le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/'. basename($_FILES['monfichier']['name']));
                       
                        $message = "avec votre fichier !";     
                }
        }
}
?>