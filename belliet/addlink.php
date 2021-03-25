<?php
$lien=(isset($_POST['lien'])) ? $_POST['lien'] : "";
$commentaire=(isset($_POST['commentaire'])) ? $_POST['commentaire'] : "";
$css=(isset($_POST['css'])) ? $_POST['css'] : "css0";


$fich="liens.txt";
if (!file_exists($fich)) {touch($fich);} //si le fichier liens.txt n'existe pas il est créé
if ($f = fopen( $fich, "a"))
{
$test=@fopen($lien,'r');
if ($test)
{
//le lien est valide, on l'insère en fin de fichier
$code='<li><a href="'.$lien.'" target="_blank">'.htmlentities($commentaire).' : '.$lien.'</a></li>'.PHP_EOL; //construction du code à insérer
fputs ($f,$code); //écriture en fin de fichier
}
else
{
echo 'Lien non valide, veuillez vérifier l\'URL saisie&nbsp;: '.$lien;
};
fclose($f);
};
echo '<form name="f" action="index.php?page=liens&css='.$css.'" method="post">
<input name="css" type="hidden" value="'.$css.'">
<input name="page" type="hidden" value="liens">
<input name="titre" type="hidden" value="ressources">
</form>';
?>
<script language="JavaScript" type="text/JavaScript">

document.f.submit();

</script>