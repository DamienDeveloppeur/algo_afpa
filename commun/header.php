<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div id="logo">
            
           
        </div>

        <div id="center" class="center mx-auto" style="width : 50%">
            <div class="nes-container with-title is-centered ">
                <p class="title">Le header </p>
                <p> <img src="../img/afpalab_logo_green.gif" id="logoimg" class="rotate" alt="Cinque Terre"> </p>
                
            <?php
            if (isset($_GET['saison']))
            {

               ?> <p>EXERCICE SAISON <?= $_GET['saison'] ?></p>
            <?php
            }
             
                ?>
              </div>
           
        </div>

        <div id="right">
           
        </div>
    </body>
</html>