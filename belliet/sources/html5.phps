<main>
    <h1>HTML 5</h1>
    <section>
        <p>Oubliez toute idée de mise en forme avec HTML 5 ! Fini les balises <code>&lt;style&gt;</code>, les attributs <code>width</code> et autres aberrations dont on ne veut plus depuis des siècles même sur Vogsphère. HTML 5, c’est la structure et rien que la structure ! Et tout est fait pour vous faciliter la vie, Terriens !
            <br/> Voici quelques exemples de ces nouveautés, sans prétention d’exhaustivité parce que cela nécessiterait un serveur qui serait à peu près l’équivalent (malcommode) en volume de plusieurs gros pâtés de maison.
        </p>
    </section>
    <section>
        <article>
            <h2>Un nouveau doctype</h2>
            <figure class="code">
                <code>&lt;!DOCTYPE html&gt;</code>
            <figcaption>La déclaration doctype HTML 5</figcaption>
            </figure>
            <p>Vous avez vu cette déclaration doctype&nbsp;? Un progrès venu tout droit d’Antarès&nbsp;: plus d’expression longue comme un poème vogon et au moins aussi désagréable, quelques caractères suffisent maintenant sans se poser plus de questions&nbsp;! Et ce doctype est rétrocompatible. Jusqu’à Internet Explorer 6 en tout cas, on ne peut pas tout avoir (même sur Antarès).
            </p>
        </article>
        <article>
            <h2>Une syntaxe simplifiée</h2>
            <figure class="code">
                <code>&lt;html lang="fr"&gt;
    &lt;head&gt;<br/>
        &lt;title&gt;
            Titre
        &lt;/title&gt;<br/>
        &lt;meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"&gt;<br/>
        &lt;link href="styles.css" rel="stylesheet"&gt;<br/>
        &lt;/head&gt;</code>
            <figcaption>La nouvelle balise HTML 5 et un exemple de head</figcaption>
            </figure>
            <p>D’une manière générale, de nombreux éléments qu’il fallait auparavant longuement détailler sont à présent beaucoup plus simples.
                <br/> En plus du doctype, la plupart des éléments nécessaires au début de votre page HTML ont été considérablement raccourcis. La balise HTML, les appels à un script ou à une CSS et la description de l’encodage se font en quelques mots.
            </p>
        </article>
        <article>
            <h2>De nouvelles balises structurantes</h2>
            <figure class="code">
                <!--<header>header</header>
                <nav>nav</nav>
                <main>
                    main
                    <section>
                        section 1
                        <header>header</header>
                        <article>article 1</article>
                        <article>article 2</article>
                        <footer>footer</footer>
                    </section>

                    <section>
                        section 2
                        <header>header</header>
                        <article>article 1</article>
                        <article>article 2</article>
                        <footer>footer</footer>
                    </section>
                </main>
                <aside>aside</aside>
                <footer>footer</footer>-->
                <img src="balises.png" alt="Une page structurée avec HTML 5" id="balises">
                <figcaption>C'est plus clair comme ça&nbsp;?</figcaption>
            </figure>

            <p>
                Afin de permettre à toutes les galaxies d’interpréter correctement la structure de votre page, vous pouvez désormais utiliser dans <code>&lt;body&gt;</code>des balises spécialement prévues à cet effet par HTML&nbsp;5.
                <br/> Ainsi, l’en-tête comportant par exemple logo et bannière sera intégré dans un bloc <code>&lt;header&gt;</code>, tandis que le pied de page sera pour sa part intégré à un bloc… <code>&lt;footer&gt;</code>, tout à fait, vous voyez que c’est tout simple.
                <br/>
                <code>&lt;nav&gt;</code> signale un moyen de navigation, par exemple un menu contenant des liens, tandis que le contenu principal de la page est regroupé dans un bloc <code>&lt;main&gt;</code>.
                <br/> Au sein de celui-ci, vous pouvez encore organiser le contenu avec les éléments <code>&lt;section&gt;</code> et <code>&lt;article&gt;</code>. Une section regroupe des contenus liés thématiquement ou logiquement et un article renvoie à une partie autonome du contenu. Une section peut ainsi contenir plusieurs articles tout comme un article peut contenir plusieurs sections, selon le découpage que vous choisissez.
                <br/> Notez que chaque section peut avoir ses propres <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code> et <code>&lt;h1&gt;</code>&nbsp;; il peut donc y en avoir plusieurs sur une même page HTML.

            </p>
        </article>
        <article>
            <h2>Des formulaires améliorés</h2>
            <figure class="code">
                <input type="tel" placeholder="Entrez votre numéro"><br/>
                <code>
                &lt;input type="tel" placeholder="Entrez votre numéro" pattern="(00 |\+)([1-9][0-9]{1,2}) [1-9](( [0-9]{2}){4})"&gt;
                </code>
                <figcaption>Un exemple de champ avec ses attributs</figcaption>
            </figure>
            <p>
                Avec de nouveaux types, de nouveaux attributs et tout un tas de choses comme ça, les formulaires prennent un sacré coup de plumeau avec HTML&nbsp;5. Entrer dans le détail ici serait trop long (nous sommes certaines que vous attendez tous avec impatience notre Guide des formulaires intergalactiques, à paraître prochainement, qui leur sera entièrement consacré, des demandes de dérogation pour la distillation de l’Esprit-d’Nos-Aïeux à ces fameux formulaires HTML, mais nous nous égarons) – trop long, disions-nous, aussi nous nous contenterons de vous en donner un bref aperçu.
                <br/> De nombreux types à attribuer à l’élément <code>&lt;input&gt;</code> vous permettent maintenant de préciser la saisie de données diverses : <code>&lt;tel&gt;</code>, <code>&lt;email&gt;</code>, <code>&lt;url&gt;</code>, <code>&lt;color&gt;</code>, <code>&lt;number&gt;</code>, <code>&lt;range&gt;</code>… Heureusement, par la magie du Babelfish, leurs noms sont assez transparents.
                <br/> Différents attributs ont aussi été ajoutés en CSS&nbsp;3&nbsp;: ainsi, <code>&lt;list&gt;</code> vous permet de proposer… exactement, une liste déroulante de choix. Nous nous contenterons de mentionner deux attributs fort intéressants&nbsp;: <code>&lt;placeholder&gt;</code>, pour pré-remplir le champ avec une indication qui disparaît lors de la saisie, et <code>&lt;pattern&gt;</code>, qui empêche la soumission d’un formulaire si les valeurs saisies dans ses champs ne correspondent pas au modèle que vous avez fixé.
            </p>
        </article>
        <article>
            <h2>Une intégration simplifiée de l'audio et de la vidéo</h2>
            <p>
              Plus besoin d’aller chercher un module d’extension sur Bételgeuse pour insérer des éléments audio ou vidéo&nbsp;! Deux nouvelles balises font ça très bien&nbsp;: <code><audio></code> et <code>&lt;vidéo&gt;</code>. Leurs attributs vous permettront ensuite de gérer l’apparence du lecteur et la façon dont sera joué le fichier audio ou vidéo.<br/>
N’oubliez pas de choisir des formats adaptés et de vérifier leur compatibilité selon les navigateurs, tous ne reconnaissent pas les mêmes&nbsp;!
            </p>
        </article>
    </section>
</main>
<aside class="retour">
    <a href="#"><img src="petunias.png" alt="un pot de pétunias" class="petunias" /></a>
</aside>