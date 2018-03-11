<?php
session_start();

if(!isset($_SESSION['login'])) {
    ?>
  <script>alert("<?php echo htmlspecialchars('Merci de vous inscrire !', ENT_QUOTES); ?>")</script>
<?php
//include('index.php');
  exit;
}

?>

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
                <div>
                    <h1 id="title-port">Votre Devis Online</h1>
                </div>
            </div>
        </div>
    </section>
    </body>
    <footer>
    <?php include("includes/footer.php")?>
    </footer>
</html>
