<nav class="menu" tabindex="0">
    <div class="smartphone-menu-trigger"></div>
    <header class="avatar">
        <a href="index.php?page=accueil&css=css0&titre=Accueil"><img src="logo-minisite-mel.png" alt="Logo du GIG"/></a>
        <h2>Menu</h2>
    </header>
    <div class="navig">
        <ul>
            <?php
    if ($page=='')
        {$class = ' active';}
    elseif ($page=='accueil')
        {$class = ' active';}
    else 
        {$class = '';}
echo '<li tabindex="0" class="element '.$class.'"><a href="index.php?page=accueil&css='.$css.'&titre=accueil">Accueil</a></li>';
    if ($page=='apropos')
        {$class = ' active';}
    else 
        {$class = '';}
echo '<li tabindex="0" class="element '.$class.'"><a href="index.php?page=apropos&css='.$css.'&titre=À&nbsp;propos">À propos</a></li>';
    if ($page=='html5')
        {$class = ' active';}
    else 
        {$class = '';}
echo '<li tabindex="0" class="element '.$class.'"><a href="index.php?page=html5&css='.$css.'&titre=HTML&nbsp;5">HTML 5</a></li>';
    if ($page=='css3')
        {$class = ' active';}
    else 
        {$class = '';}
echo '<li tabindex="0" class="element '.$class.'"><a href="index.php?page=css3&css='.$css.'&titre=CSS&nbsp;3">CSS 3</a></li>';
    if ($page=='liens')
        {$class = ' active';}
    else 
        {$class = '';}
echo '<li tabindex="0" class="element '.$class.'"><a href="index.php?page=liens&css='.$css.'&titre=Ressources">Bonnes adresses</a></li>';
    if ($page=='contact')
        {$class = ' active';}
    else 
        {$class = '';}
echo '<li tabindex="0" class="element '.$class.'"><a href="index.php?page=contact&css='.$css.'&titre=Contact">Besoin d\'aide&nbsp;?</a></li>';
            ?>
        </ul>
    </div>
</nav>