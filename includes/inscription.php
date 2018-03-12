   
  <!-- Contains the Connection form Modal) -->
<div id="id02" class="modal">
  
  <form class="modal-content animate" method="post">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    <div class="imgcontainer">
      <img src="images/avatar2.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <label for="uname"><b>Nom d'Utilisateur</b></label>
      <input type="text" placeholder="Entrer Login" name="uname" required>

      <label for="psw"><b>Mot de Pass</b></label>
      <input type="password" placeholder="Entrer Mot de Pass" name="psw" required>
     
      <label>
        <input type="checkbox" checked="checked" name="remember">Se souvenir de moi
        <span class="psw">Mot de pass <a href="#">oublier ?</a></span>
      </label>
        
    </div>
      
    <div class="clearfix">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Annuler</button>
         <button type="submit" class="signupbtn">Connexion</button>
    </div>
      
  </form>
</div>
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

<script>
// Get the modal
    var modal = document.getElementById('id01');
    var modal = document.getElementById('id02');
    
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




