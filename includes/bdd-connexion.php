<?php
try
{
//    $bdd = new PDO('mysql:host=franck-cariou.infos.st;dbname=varkez_franck-cariou;charset=utf8','','');
//    array(PDO::ATTR_ERRORMODE => PDO::ERRMODE_EXCEPTION));
}

catch(Exception $e)
        {
        die('Erreur : ' . $e->getMessage());
        }


if(count($_REQUEST)) {
    if(!empty($_REQUEST['uname']) && !empty($_REQUEST['psw'])) {
      extract($_REQUEST);
      // on recupère le password de la table qui correspond au login du visiteur
        
      $req = $bdd->prepare('select COUNT(*) as nbUsersFound from users where pseudo = :pseudo AND password = :password');
    
$req->execute(array(
':pseudo' => $_REQUEST['uname'],
':password' => $_REQUEST['psw'],
));
        $result = $req->fetch();
        if ($result['nbUsersFound'] == 0) {
            ?><script>alert("<?php echo htmlspecialchars('Mauvais login / password. Merci de recommencer', ENT_QUOTES); ?>")</script>
                <?php
       
          // On inclut le formulaire d'identification
//            echo "<span onclick="document.getElementById('id02').style.display='none'"/>";
        exit;
          
            }
            else {
//        session_start();
//        $_SESSION['uname'] = $login;
              ?><script>alert("<?php echo htmlspecialchars('Bienvenue !', ENT_QUOTES); ?>")</script>
                <?php
        // ici vous pouvez afficher un lien pour renvoyer
        // vers la page d'accueil de votre espace membres
//          if(isset($_REQUEST['remember'])){
//              setcookie('uname','psw', time() + 365*24*3600, null, null, false, true);
          }
      
         }
    
    else {
        
               //On inclut le formulaire d'identification
       exit;  
    }
}
?>