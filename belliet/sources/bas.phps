<footer id="bas">
<?php
    if ($css=='')
        {$class = 'class="element active"';}
    elseif ($css=='css0')
        {$class = 'class="element active"';}
    else 
        {$class = 'class="element"';}
echo '<p '.$class.'> <a href="index.php?page='.$page.'&css=css0&titre='.$titre.'">CSS Bellane</a></p>';
    if ($css=='css1')
        {$class = 'class="element active"';}
    else 
        {$class = 'class="element"';}
echo '<p '.$class.'><a href="index.php?page='.$page.'&css=css1&titre='.$titre.'">CSS Juliet</a></p>';
    if ($css=='css2')
        {$class = 'class="element active"';}
    else 
        {$class = 'class="element"';}
echo '<p '.$class.'><a href="index.php?page='.$page.'&css=css2&titre='.$titre.'">Vide intersidéral</a></p>';
    if ($css=='css3')
        {$class = 'class="element active"';}
    else 
        {$class = 'class="element"';}
echo '<p '.$class.'><a href="index.php?page='.$page.'&css=css3&titre='.$titre.'">CSS à imprimer</a></p>';
?>
    <p class="element2">
        <a href="<?php echo 'index.php?page=apropos&css='.$css.'&titre=À&nbsp;propos#droits' ?>">(ɔ) - Bellane et Juliet</a>
    </p>
</footer>