<?php
$page=$_GET['page'];
$css=$_GET['css'];
$titre=$_GET['titre'];
if (($page=='')||(substr($page,0,7)=='http://')||(substr($page,0,8)=='https://'))
{
$page = "accueil";
$titre = "Accueil";
$css="css0";
}
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <title>
            <?php echo "Le Guide de l'intégrateur galactique - ".$titre ?>
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" media="print" href="print.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <?php echo '<link href="'.$css.'.css"'.' rel="stylesheet" />'; ?>
            <link rel="icon" type="image/png" href="logogig.png">
    </head>

    <body>


        <?php
// inclusion des fichiers
include "haut.php";//haut de page
echo "\n";
        ?>
            <div id="ecran">
                <?php
        include "navig.php"; //menu
        echo "\n";
        include $page.".php"; //page ‡ inclure en fonction de la valeur de $page
        echo "\n";
        include "bas.php"; // bas de page
                ?>
            </div>
    </body>

    </html>