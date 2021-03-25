<main>
    <h1>Bienvenue, Terriens&nbsp;!</h1>

    <!--carrousel-->
    <span id="sl_play" class="sl_command"></span>
    <span id="sl_pause" class="sl_command"></span>
    <span id="sl_i1" class="sl_command sl_i"></span>
    <span id="sl_i2" class="sl_command sl_i"></span>
    <span id="sl_i3" class="sl_command sl_i"></span>
    <span id="sl_i4" class="sl_command sl_i"></span>
    <section id="slideshow">
        <a class="play_commands pause" href="#sl_pause" title="Mettre l'animation en pause">Pause</a>
        <a class="play_commands play" href="#sl_play" title="Reprendre l'animation">Play</a>
        <div class="container">
            <div class="slider">
                <a href="#slideshow">
                    <figure>
                        <a href="<?php echo 'index.php?page=html5&css='.$css.'&titre=HTML&nbsp;5' ?>"><img src="slider-html.png" alt="HTML 5">
                            <figcaption>HTML&nbsp;5 c'est trop top&nbsp;!</figcaption>
                        </a>
                    </figure>
                    <figure>
                        <a href="<?php echo 'index.php?page=css3&css='.$css.'&titre=CSS&nbsp;3' ?>"><img src="slider-css.png" alt="CSS 3">
                            <figcaption>CSS&nbsp;3 c'est chouette tout plein&nbsp;!</figcaption>
                        </a>
                    </figure>
                    <figure>
                        <a href="<?php echo 'index.php?page=liens&css='.$css.'&titre=Liens' ?>"><img src="slider-liens.png" alt="Bonnes adresses">
                            <figcaption>Découvrez nos bonnes adresses&nbsp;!</figcaption>
                        </a>
                    </figure>
                </a>
            </div>
        </div>
    </section>
    <section>
        <p class="intro letter">
            Tout là-bas, au fin fond des tréfonds inexplorés et mal famés du bout du bras occidental de la Galaxie, traîne un petit soleil jaunâtre et minable.
            <br/> En orbite autour de celui-ci, à la distance approximative de cent cinquante millions de kilomètres, se trouve une petite planète bleu-vert et totalement négligeable dont les habitants - descendus du singe - sont primitifs au point de croire encore que HTML&nbsp;4 et CSS&nbsp;2 sont une vachté de chouette idée.
        </p>
        <p class="intro">
            Heureusement, notre Guide de l'intégrateur galactique est là pour aider ceux d'entre eux qui voudraient accéder à la connaissance pangalactique à s'y retrouver. Surtout, <span class="dont-panic">pas de panique</span>&nbsp;!
        </p>
    </section>
    <section id="accroches">
        <article id="guide">
            <h2>Le Guide</h2>
            <p>
                <img src="logo-gig.png" alt="C'est nous !">
            </p>
            <p>
                Vous trouverez ici quelques éléments pour commencer avec HTML 5 et CSS 3. Détailler toutes les nouveautés serait très long et très compliqué, nous vous proposons donc quelques éléments parmi les plus courants et les plus utiles.
                <br/> Consultez également notre liste de bonnes adresses de ressources&nbsp;!
            </p>
        </article>
        <article id="htmleuh">
            <a href="<?php echo 'index.php?page=html5&css='.$css.'&titre=HTML&nbsp;5' ?>">
                <h2>HTML 5</h2>
                <p>
                    <img src="html5.png" alt="Logo HTML 5">
                </p>
                <p>
                    À vous les belles pages bien structurées avec HTML&nbsp;5&nbsp;! Découvrez tout un tas de nouvelles dispositions du langage, importées tout exprès de galaxies lointaines pour adapter le langage aux dernières technologies terriennes&nbsp;!
                </p>
            </a>
        </article>
        <article id="csseuh">
            <a href="<?php echo 'index.php?page=css3&css='.$css.'&titre=CSS&nbsp;3' ?>"><h2>CSS 3</h2>
            <p>
                <img src="css3.png" alt="Logo CSS 3 non officiel">
            </p>
            <p>
                Vous vous êtes déjà arraché les cheveux en tentant de créer une CSS ? Vous ragez dès qu’il faut utiliser JavaScript et autres méthodes barbares ? Découvrez les nouvelles possibilités de CSS 3 !
            </p>
            </a>
        </article>
    </section>
</main>
<aside class="retour">
    <a href="#"><img src="petunias.png" alt="un pot de pétunias" class="petunias" /></a>
</aside>