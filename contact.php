<main class="main">
    <?php $lang = $_REQUEST['lang'];
    echo '<h1 id="hop">' . CONTACT . '</h1>'; ?>
    <?php $lang = $_REQUEST['lang']; ?>
    <?php echo '<form action="?page=sendmessage&lang=' . $lang . '&titre=' . $titre . '" method="post" onsubmit="return valider(this)" class="form">
                    <h2>' . INVITATION . '</h2>
                        <a href="' . LINKEDIN . '"><img src="img/linkedin.jpg" alt="LinkedIn" class="icone"></a>
                                        
                                        <h3 class="alerte">' . DESACTIVATION . '</h3>
                                        <p>
                        <label for="prenom">*
                            ' . PRENOM . ':
                        </label>
                        <br/>

                        <input id="prenom" type=text name="prenom" placeholder="' . PRENOM . '" required/>
                    </p>
                    <p>
                        <label for="nom">*
                            ' . NOM . ':
                        </label>
                        <br/>
                        <input id="nom" type=text name="nom" placeholder="' . NOM . '" required/>
                    </p>
                    <p>
                        <label for="expediteur">*
                            ' . COURRIEL . ':
                        </label>
                        <br/>

                        <input id="expediteur" type=email name="expediteur" placeholder="' . COURRIEL . '" required/>
                    </p>
                    <p>
                        <label for="objet">*
                            ' . OBJET . ':
                        </label>
                        <br/>

                        <input id="objet" type=text name="objet" placeholder="' . OBJET . '" required/>
                    </p>
                    <p>
                        <label for="message">*
                            ' . MESSAGE . ':
                        </label>
                        <br/>
                        <textarea id="message" type=text name="message" placeholder="' . MESSAGE . '" required></textarea>
                    </p>
                    <p>*' . REQUIRED . '</p>
<!--                    <p>
                        <input id="valider" type=submit value="' . ENVOYER . '" name="valider">
                    </p>
                    <p>
                        <input id="effacer" type=reset value="' . EFFACER . '" name="effacer">
                    </p>
-->                   
                </form>';
    ?>
</main>