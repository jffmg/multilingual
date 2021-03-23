<main class="main">
    <?php
if(isset($_POST['valider']))
{
    $destinataire = 'juliette@malgouyard.com';
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $expediteur = $_POST['expediteur'];
    $objet = $_POST['objet'];
    $message = "Message de $expediteur depuis le site perso :\n" .$_POST['message'];
    $entete = "Content-type: text/plain; charset=utf8\n";
    $entete.= 'From: messageriez@hotmail.fr\n' ;
    if (isset($expediteur))
        {
            if (preg_match("!^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,6}$!", $expediteur))        
                {
                    if (mail($destinataire,$objet,$message,$entete))
                        {
                        echo '<p class="merci"> '.MERCI.$prenom.' '.$nom.ESPACE.'!</p><a href="?page=contact&lang='.$lang.'&titre='.$titre.' id="retourform">'.RETOUR.'</a>';
                        }
                    else 
                        { 
                        echo PROBLEME;
                        echo '<a href="?page=contact&lang='.$lang.' class="merci">'.REESSAYER.'?</a>';
                        }
                }
        }
        else
            {
            echo ADRESSEINVALIDE1.$expediteur.ADRESSEINVALIDE2;
            }
}
?>
</main>