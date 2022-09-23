<?php 
// Connexion à la BDD
require('function.php');
?>

<?php
$image_req = $pdo->prepare('SELECT * FROM `img`');

$image_req->execute();
?>

<!DOCTYPE html>
<html lang="fr">

    <?php
    require('head.php');
    ?>
    
    <body>

        <div id="on_off-btns">
            <div class="sun off">   <button>  <img src="img/sun.png" alt="light mode" title="On button">    </button>    </div>
            <div class="moon">      <button>  <img src="img/moon.png" alt="dark mode" title="Off button">   </button>    </div> 
        </div>

        <section>
            <div id="gallery">
                <?php
                while($all_image = $image_req->fetch()){
                ?>
                <div>
                    <a href=""><img src="<?= $all_image['image_root']; ?>" title="Inna's photo" alt="image" /></a>
                </div>
                <?php
                }
                ?>
            
            </div>
        </section>
    </body>

    <script src="app.js"></script>

</html>