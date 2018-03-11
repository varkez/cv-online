<?php include("includes/bdd-contact.php");?>

    <!DOCTYPE html>
    <html>

    <head>
        <?php include("includes/head.php")?>
    </head>

    <body>
        <section>
            <?php include("includes/header.php") ?>
        </section>
        <section>
            <div id="page-content">
                <?php include("includes/menu-left.php") ?>
                <div class="column-center">
                    <div class="content-center">

                        <h1 id="fc-title">Formulaire de Contact</h1>
                        <br>
                        <form action="" method="post" name="contact" enctype="multipart/form-data">
                            <div>
                                <input type="text" id="prenom" placeholder="Prénom" value="" name="user_firstname" required/>
                                <label for="nom">- Prénom -</label>
                            </div>
                            <div>
                                <!--                            -->
                                <input type="text" id="nom" placeholder="Nom" value="" name="user_lastname" required/>
                                <label for="prenom">- Nom -</label>
                            </div>
                            <div>
                                <!--                        -->
                                <input type="email" id="courriel" placeholder="E-Mail" value="" name="user_email" required/>
                                <label for="courriel">- Courriel -</label>
                            </div>
                            <div>
                                
                                <textarea id="user_message" name="user_message" placeholder="Ecrivez votre message, n'ayez pas peur de trop en dire !" required></textarea>
                                <label for="message">- Votre Message -</label>
                            </div>
                            <div>
                                <input type="file" name="monfichier" /><br>
                            </div>
                            <div>
                                <button type="submit">Envoyer votre message</button>
                            </div>
                        
                            <div>
                                
        <span style="color: red;">
        <?php

        
        if(!empty($firstname && $lastname && $email && $message))
        {
            echo "Votre message a été envoyé";
            
                
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'pdf', 'doc', 'docx');

                if(in_array($extension_upload, $extensions_autorisees))
                  {
                    echo "<br>".$message;
                  }
            
            
                if((!in_array($extension_upload, $extensions_autorisees)) || $_FILES['monfichier']['size'] >= 1000000)
                  {     
                        echo "<br>"."La taille maximum autorisé est 1Go."; 
                        echo "<br>"."Les extensions autorisés sont .jpg, .jpeg, .gif, .png, .pdf, .doc, .docx";  
                  }
        }
        
        ?>
        </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <footer>
        <section>
            <div>
                <?php include('includes/footer.php'); ?>
            </div>
        </section>
    </footer>

    </html>