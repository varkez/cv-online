   <?php /*echo "Bonjour $_COOKIE['login']"; */?>

<header id="animated">    
    <div class="connexion">
        
        <button onclick="document.getElementById('id02').style.display='block'">Connexion</button> /
        <button onclick="document.getElementById('id01').style.display='block'">S'inscrire</button>

    </div>
        <div id="cv-name">
            <h1>Franck Cariou</h1>
            <h2>Développeur Web Junior</h2>
        </div>
</header>
<!-- Contains Menu -->
<nav id="scrollBar">
    
    <ul class="menu-left">
            <li class="menu-item">
                <a class="active" href="index.php">Acceuil</a>
            </li>
<!--
            <li class="menu-item">
                <a href="experiences.php">Experiences</a>
            </li>
-->
            <li class="menu-item">
                <a href="formations.php">Formations</a>
            </li>
<!--
            <li class="menu-item">
                <a href="loisirs.php">Loisirs</a>
            </li>
-->
            <li class="menu-item">
                <a href="portfolio.php">Portfolio</a>
            </li>
            <li class="menu-item">
                <a href="blog.php">blog</a>
            </li>
            <li class="menu-item">
                <a href="contact.php">Contact</a>
            </li>
<!--
             <li class="menu-item">
                <a href="devis/devis">Devis</a>
            </li>
-->
    </ul>
    
    <ul class="menu-right">
        
            <li class="menu-icon">
                
                <a tags="Linked In" href="https://www.linkedin.com/in/franck-cariou-796a07152/" target="_blank"><img src="images/linked-in.svg" alt="#" style="width:25px; height:25px"/></a>
            </li>
            <li class="menu-icon">
                <a tags="Git Hub" href="https://github.com/varkez/" target="_blank"> <img src="images/icon-git.svg" alt="#" style="width:25px; height:25px"/></a>
            </li>
            
            <li class="menu-icon">
                <a tags="Stack Over Flow" href="https://stackoverflow.com/story/franckcariou" target="_blank"> <img src="images/stack-overflow.svg" alt="#" style="width:25px; height:25px"/></a>
            </li>
            <li class="menu-icon">
                <a tags="Reddit" href="https://www.reddit.com/user/varkez" target="_blank"> <img src="images/reddit.svg" alt="#" style="width:28px; height:28px"/></a>
            </li>
            
            <li class="menu-icon">
                <a href="protected/franck-cariou-cv.pdf" download="franck-cariou-cv">
            <button type="button" value="Télécharger">Télécharger CV</button>
                </a>
            </li>
            <li class="menu-icon">
                <a target="_blank" href="protected/franck-cariou-cv.pdf">
                    <button type="submit" formtarget="_blank" value="Télécharger">Afficher CV</button>
                </a>

                <!--
            //Protected Method
            <form action="" type="button" method="post" name="downloadcv" value="Télécharger">
            <button type="submit" name="mon-cv">Télécharger CV </button>
                </form>
-->
    </ul>
</nav>
    

<?php include('includes/inscription.php'); ?>
<?php include('includes/connexion.php'); ?>
<?php include('includes/navBarScrollDown.php'); ?>
<?php include('includes/bdd-downloadcv.php'); ?>