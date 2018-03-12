<?php
if ((isset($_REQUEST['user_pseudo']) && isset($_REQUEST['user_email']) && isset($_REQUEST['user_psw'])) && isset($_REQUEST['user_psw-repeat'])){
    //    var_dump($_POST);
    $pseudo = $_REQUEST['user_pseudo'];
    $email = $_REQUEST['user_email'];
    $pwd = $_REQUEST['user_psw'];
    $pwdRepeat = $_REQUEST['user_psw-repeat'];

    try
        {
//            $bdd = new PDO('mysql:host=franck-cariou.infos.st;dbname=varkez_franck-cariou;charset=utf8','','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }

        catch(Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    
    
    if($pwd == $pwdRepeat){
        $reqPseudo = $bdd->query("SELECT * FROM users WHERE pseudo='$pseudo'");
        $reqEmail = $bdd->query("SELECT * FROM users WHERE email='$email'");
        
        $respPseudo = $reqPseudo->fetchAll();
        $respEmail = $reqEmail->fetchAll();
    
        
        
        if(empty($respPseudo) && empty($respEmail)) {
            
            
        
            
        $req = $bdd->prepare('INSERT INTO users(pseudo, email, password) VALUES(:pseudo, :email, :password)');
        $req->execute(array(
            'pseudo' => $_REQUEST['user_pseudo'],
            'email' => $_REQUEST['user_email'],
            'password' => $_REQUEST['user_psw'],
        ));
        ?><script>alert("<?php echo htmlspecialchars('Merci pour votre inscription !', ENT_QUOTES); ?>")</script>
                <?php
        }elseif(!empty($respPseudo)) {
            
            ?><script>alert("<?php echo htmlspecialchars('Ce pseudo existe déja.', ENT_QUOTES); ?>")</script>
                <?php
        }elseif(!empty($respEmail)){
            
            ?><script>alert("<?php echo htmlspecialchars('Cette E-Mail existe déja.', ENT_QUOTES); ?>")</script>
                <?php
        }

    } else {
        ?><script>alert("<?php echo htmlspecialchars('Les deux mots de pass ne sont pas identique.', ENT_QUOTES); ?>")</script>
                <?php
    }
}
?>