<?php
if(isset($_POST["valider"]))
{
    $destinataire = 'toto@toto.com';
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $expediteur = $_POST["expediteur"];
    $objet = $_POST["objet"];
    $message = "Message de $expediteur depuis le mini-site GIG :\n" .$_POST["message"];
    $entete.= "Content-type: text/plain; charset=utf8\n";
    $entete.= "From: formulairedecontactminisite@etudiants-caweb.u-strasbg.fr\n" ;
    if (mail($destinataire,$objet,$message,$entete))
        {
        echo '<p>Merci pour votre message, '.$prenom.' '.$nom.'&nbsp;! L\'équipe du GIG vous répondra et tentera de vous venir en aide&nbsp;! En attendant, prenez ceci&nbsp;: <img src="serviette-test2.png" alt="serviette" class="serviette"/>
        </p>'; 
        echo '<a href="belliet/index.php?page=contact&css='.$css.'&titre='.$titre.' id="retourform">Retour</a>';
        }
    else 
        { 
        echo 'Un probl&eagrave;me s\'est produit lors de l\'envoi du message.';
        echo '<a href="belliet/index.php?page=contact&css='.$css.'&titre='.$titre.'>Nouvelle tentative&nbsp;?</a>';
        }
}
?>