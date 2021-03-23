<nav class="menu">
    <p class="bouton">
        <?php echo MENU; ?>
    </p>
    <ul>
        <?php
    if ($page=='')
        {$class = ' active';}
    elseif ($page=='accueil')
        {$class = ' active';}
    else 
        {$class = '';}
echo '<li class="lienaccueil element '.$class.'"><a href="?lang='.$lang.'&page=accueil"><img src="img/accueil.png" alt="'.ACCUEIL.'" class="icone"><span class="item">'.ACCUEIL.'</span></a></li>';
    if ($page=='parcours')
        {$class = ' active';}
    else 
        {$class = '';}
echo '<li class="element'.$class.'"><a href="?lang='.$lang.'&page=parcours"><img src="img/parcours.png" alt="'.PARCOURS.'" class="icone"><span class="item">'.PARCOURS.'</span></a></li>';
    if ($page=='competences')
        {$class = ' active';}
    else 
        {$class = '';}
echo '<li class="element'.$class.'"><a href="?lang='.$lang.'&page=competences"><img src="img/competences.png" alt="'.COMPETENCES.'" class="icone"><span class="item">'.COMPETENCES.'</span></a></li>';
    if ($page=='portfolio')
        {$class = ' active';}
    else 
        {$class = '';}
echo '<li class="element'.$class.'"><a href="?lang='.$lang.'&page=portfolio"><img src="img/portfolio.png" alt="'.PORTFOLIO.'" class="icone"><span class="item">'.PORTFOLIO.'</span></a></li>';
    if ($page=='contact')
        {$class = ' active';}
    else 
        {$class = '';}
echo '<li class="element'.$class.'"><a href="?lang='.$lang.'&page=contact"><img src="img/contact.png" alt="'.CONTACT.'" class="icone"><span class="item">'.CONTACT.'</span></a></li>';
            ?>
    </ul>
    <ul class="menulang">
        <?php
        if ($lang== '')
        {$class = ' active';}
        if ($lang=='fr')
        {$class = ' active';}
    else 
        {$class = '';}
        echo '<li class="element'.$class.'"><a href="?lang=fr&page='.$page.'">Français</a></li>';
        if ($lang=='de')
        {$class = ' active';}
    else 
        {$class = '';}
        echo '<li class="element'.$class.'"><a href="?lang=de&page='.$page.'">Deutsch</a></li>';
        if ($lang=='en')
        {$class = ' active';}
    else 
        {$class = '';}
        echo '<li class="element'.$class.'"><a href="index.php?lang=en&page='.$page.'">English</a></li>';            
            ?>
    </ul>
    <ul class="reseauxpro">
        <li class="element reseaux"><a href="<?php echo LINKEDIN; ?>" alt="LinkedIn" target="_blank"><img src="img/linkedin.jpg" alt="LinkedIn"></a></li>
    </ul>
</nav>