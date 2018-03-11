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
<html>
    <!-- Contains the Sign Up form Modal -->
    <div id="id01" class="modal">

        <form class="modal-content animate" method="post" action="">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <div class="container">
                <h1>S'inscrire</h1>
                <p>Merci de remplir ce formulaire pour créer un compte.</p>
                <hr>
                <label for="pseudo"><b>Pseudo</b></label>
                <input type="text" placeholder="Entrer Pseudo" name="user_pseudo" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Entrer Email" name="user_email" required>

                <label for="psw"><b>Mot de Pass</b></label>
                <input type="password" placeholder="Entrer Mot de Pass" name="user_psw" required>

                <label for="psw-repeat"><b>Répéter Mot de Pass</b></label>
                <input type="password" placeholder="Répéter Mot de Pass" name="user_psw-repeat" required>

                <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> 
          Se souvenir de moi
      </label>
                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
                    <button type="submit" class="signupbtn">S'inscrire</button>
                </div>
                <hr>
                <p>En créant un compte, vous acceptez nos <a href="#" style="color:dodgerblue">Termes & conditions</a>.</p>
            </div>
        </form>
    </div>
</html>


    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
