<main>
    <h1>Bonnes adresses</h1>
    <h2>Nos recommandations</h2>
    <h3>Site de référence</h3>
    <p>
        <ul>
            <li><a href="http://www.w3.org">Le site du <strong>World Wide Web Consortium</strong>, qui fixe notamment les standards HTML et CSS</a></li>
        </ul>
    </p>
    <h3>Cours et tutoriels</h3>
    <p>
        <ul>
            <li><a href="https://openclassrooms.com/"><strong>OpenClassrooms</strong>, plate-forme de MOOC et tutoriels dans des domaines variés dont le développement web</a></li>
            <li><a href="http://www.codecademy.com/fr"><strong>Codecademy</strong>, plate-forme gratuite d'apprentissage de plusieurs langages dont HTML et CSS</a></li>
            <li><a href="http://www.alsacreations.com"><strong>Alsacréations</strong>, communauté d'apprentissage des standards du Web</a></li>
            <li><a href="http://www.w3schools.com/css/"><strong>W3Schools</strong>, plate-forme d'apprentissage autour des technologies du web</a></li>
        </ul>
    </p>
    <h3>Outils</h3>
    <p>
        <ul>
            <li><a href="http://validator.w3.org/"><strong>The W3C Markup Validation Service</strong>&nbsp;: Vérifiez la validité de votre code HTML&nbsp;5 selon les standards du W3C</a></li>
            <li><a href="http://jigsaw.w3.org/css-validator/"><strong>The W3C CSS Validation Service</strong>&nbsp; Vérifiez la validité de votre feuille de style CSS&nbsp;3 selon les standards du W3C</a></li>
            <li><a href="http://caniuse.com/"><strong>Can I Use...</strong>&nbsp;: Vérifiez quels navigateurs connaissent les fonctionnalités HTML&nbsp;5 et CSS&nbsp;3 que vous utilisez</a></li>
            <li><a href="https://developer.mozilla.org/fr/"><strong>Mozilla Developer Network</strong>, documentation sur les technologies du Web</a></li>
        </ul>
    </p>
    <h2>Proposez vos références&nbsp;!</h2>

    <p>
        <ul id="liens">
            <?php include "liens.txt"; ?>
        </ul>
    </p>
    <div class="form">
        <form name="form" id="form1" method="post" action="addlink.php">
            <p>
                <label for="lien">Lien vers la ressource&nbsp;:</label>
                <input type="url" name="lien" id="lien" placeholder="http(s)://" required />
            </p>
            <p>
                <label for="commentaire">Présentez-nous la ressource&nbsp;:</label>
                <textarea name="commentaire" id="commentaire" placeholder="Commentez votre lien" required></textarea>
            </p>
            <input type="hidden" name="css" value="<? echo $css; ?>" />
            <input name="submit" value="Envoyez votre proposition" type="submit" />
        </form>
    </div>
</main>
<aside class="retour">
    <a href="#"><img src="petunias.png" alt="un pot de pétunias" class="petunias" /></a>
</aside>