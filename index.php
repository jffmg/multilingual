<?php
require 'choixlang.php';

$page=$_GET['page'];

switch($page)
{
    case "parcours" :
        $page_a_inclure = "parcours.php";
        $titre = PARCOURS;
    break;
    
    case "competences" :
        $page_a_inclure = "competences.php";
        $titre = COMPETENCES;
    break;
    
    case "portfolio" :
        $page_a_inclure = "portfolio.php";
        $titre = PORTFOLIO;
    break;
        case "contact" :
        $page_a_inclure = "contact.php";
        $titre = CONTACT;
    break;
    case "sendmessage" :
        $page_a_inclure = "sendmessage.php";
        $titre = CONTACT;
    break;
    case "mentions" :
        $page_a_inclure = "mentions.php";
        $titre = MENTIONSMENU;
    break;
    default :
        $page_a_inclure = "accueil.php";
        $titre = ACCUEIL;
    break;

}

?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $lang ?>">

    <head>
        <title>Juliette Malgouyard - <?php echo $titre; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" '.' rel="stylesheet" />
        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/menuscroll.js"></script>
        <script type="text/javascript" src="js/retourhaut.js"></script>
        <script  media="(max-width: 768px)" type="text/javascript" src="js/toggle.js"></script>

    </head>

    <body>
       
<div id="ecran">
                    <?php
// inclusion des fichiers
        echo "<a href='#' class='retourhaut'></a>";
        include "haut.php";//haut de page
        echo "\n";
        include "navig.php"; //menu
        echo "\n";
        include $page_a_inclure;
        echo "\n";
        include "bas.php"; // bas de page
                ?>
                </div>
    </body>

    </html>