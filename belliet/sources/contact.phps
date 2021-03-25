<main role="main">
    <h1 id="hop">Vous voulez nous appeler à l'aide&nbsp;?</h1>
    <section>
        <div id="bouton">
            <a href="#bouton">HELP</a>
        </div>
        <div id="clic_bouton">
            <p class="dont-panic">Pas de panique&nbsp;!
            </p>
            <?php $css=$_REQUEST['css'] ?>
                <form action="<?php echo 'https://etudiants-caweb.u-strasbg.fr/1617/jmalg/minisite/index.php?page=sendmessage&css='.$css.'&titre=GIG'; ?>" method="post" onsubmit="return valider(this)" class="form">
                    <h2>Envoyez-nous un message&nbsp;!</h2>
                    <p>
                        <label for="nom">
                            Votre nom&nbsp;:
                        </label>
                        <br/>
                        <input id="nom" type=text name="nom" placeholder="Votre nom" required/>
                    </p>
                    <p>
                        <label for="prenom">
                            Votre prénom&nbsp;:
                        </label>
                        <br/>

                        <input id="prenom" type=text name="prenom" placeholder="Votre prénom" required/>
                    </p>
                    <p>
                        <label for="expediteur">
                            Votre adresse de courriel&nbsp;:
                        </label>
                        <br/>

                        <input id="expediteur" type=email name="expediteur" placeholder="Votre adresse de courriel" required/>
                    </p>
                    <p>
                        <label for="objet">
                            L'objet de votre message&nbsp;:
                        </label>
                        <br/>

                        <input id="objet" type=text name="objet" placeholder="L'objet de votre message" required/>
                    </p>
                    <p>
                        <label for="message">
                            Votre message&nbsp;:
                        </label>
                        <br/>
                        <textarea id="message" type=text name="message" placeholder="Votre message" required></textarea>
                    </p>
                    <p>
                        <input id="valider" type=submit value="Envoyer le message" name="valider">
                    </p>
                    <p>
                        <input id="effacer" type=reset value="Effacer le formulaire" name="effacer">
                    </p>
                </form>
        </div>
</main>
<aside class="retour">
    <a href="#hop"><img src="petunias.png" alt="un pot de pétunias" class="petunias" /></a>
</aside>