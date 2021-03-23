<main class="main">
    <h1><?php echo MSG_ACCUEIL; ?></h1>
    <section class="accueil">
        <div class="texteaskewneg">
            <img src="img/accueil.png" alt="Accueil" class="imgbande">
            <p>
                <?php echo INTRO1.'</p><p>'.INTRO2; ?></p>
            <?php echo '<p><a href="?lang='.$lang.'&page=contact" class="lienpage un">'.CONTACT.'</a></p>'; ?>
        </div>
    </section>
    <section class="competences">
        <div class="texteaskewpos">
            <img src="img/competences.png" alt="" class="imgbande">
            <h2><?php echo COMPETENCES; ?></h2>
            <div id="competences">
                <ul>
                    <li>
                        <img src="img/langues.png" alt="" class="rubrique"></li>
                    <li>
                        <h3><?php echo TRADUCTION; ?></h3></li>
                    <li>
                        <?php echo BLABLATRADUCTIONACCUEIL; ?>
                    </li>
                </ul>
                <ul>
                    <li><img src="img/web.png" alt="" class="rubrique"></li>
                    <li>
                        <h3><?php echo DEVELOPPEMENT; ?></h3></li>
                    <li>
                        <?php echo BLABLADEVELOPPEMENTACCUEIL; ?>
                    </li>
                </ul>
                <ul>
                    <li><img src="img/redaction.png" alt="" class="rubrique"></li>
                    <li>
                        <h3><?php echo REDACTION; ?></h3></li>
                    <li>
                        <?php echo BLABLAREDACTIONACCUEIL; ?>
                    </li>
                </ul>
            </div>
            <?php echo '<p><a href="?lang='.$lang.'&page=competences" class="lienpage deux">'.COMPETENCES.'</a></p>'; ?>
        </div>
    </section>

    <section class="parcours">
        <div class="texteaskewneg">
            <img src="img/parcours.png" alt="" class="imgbande">
            <h2><?php echo PARCOURS; ?></h2>
            <p>
                <?php echo BLABLAPARCOURSACCUEIL; ?>
            </p>
            <?php echo '<p><a href="?lang='.$lang.'&page=parcours" class="lienpage trois">'.FORMATION.'</a></p>'; ?>
        </div>
    </section>
    <section class="realisations">
        <div class="texteaskewpos">
            <img src="img/portfolio.png" alt="" class="imgbande">
            <h2><?php echo PORTFOLIO; ?></h2>
            <p>
                <?php echo BLABLAPORTFOLIOACCUEIL; ?>
            </p>
            <?php echo '<p><a href="?lang='.$lang.'&page=portfolio" class="lienpage quatre">'.PORTFOLIO.'</a></p>'; ?>
            </p>
        </div>
    </section>
</main>