<?php 
// Connexion à la BDD
require('function.php');
?>

<?php
$image_req = $pdo->prepare('SELECT * FROM `img` ORDER BY `id` DESC LIMIT 15');

$image_req->execute();
?>

<!DOCTYPE html>
<html lang="fr">

    <?php
    require('head.php');
    ?>
    
    <body>

        <div id="on_off-btns">
            <div class="sun off">   <button>  <img src="img/btns/sun.png" alt="light mode" title="On button">    </button>    </div>
            <div class="moon">      <button>  <img src="img/btns/moon.png" alt="dark mode" title="Off button">   </button>    </div> 
        </div>

        

        <section>
            <div id="gallery">
                <?php
                while($all_image = $image_req->fetch()){
                ?>
                <div>
                    <a href=""><img src="<?= $all_image['image_root']; ?>" title="Girl's photo" alt="image" /></a>
                </div>
                <?php
                }
                ?>
            
            </div>
        </section>

        <button id="loadMore_btn">Load More</button>
    </body>

    <script src="app.js"></script>

</html>

