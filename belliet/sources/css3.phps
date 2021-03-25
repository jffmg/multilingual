<main>
    <h1>CSS 3</h1>
    <section>
        <p>Nous avons une bonne et une mauvaise nouvelle pour vous.
            <br/>
            </br/>La mauvaise, c’est que CSS 3 ne règlera pas tous vos problèmes de mise en forme&nbsp;! Vous devrez toujours vous arracher les cheveux avec des scripts et autres méthodes barbares. Désolées. C’est pas notre faute, la vie terrienne est injuste, c’est tout. CSS&nbsp;3, c’est un peu comme un thé sans lait sur Terre : on aurait aimé encore mieux… mais on prend quand même&nbsp;!
            <br/> La bonne, c’est qu’il y a quand même suffisamment d’améliorations pour que vous pauvres Terriens webdesigners puissiez enfin réaliser bien plus facilement des mises en forme auparavant très complexes.
        </p>
        <section>
            <article>
                <h2>De nouveaux effets visuels</h2>
                <figure class="code">
                    <div class="effets">Ceci est un exemple.</div>
                    <code>&lt;div class="effets"&gt;Ceci est un exemple.&lt;/div&gt;<br/>
                    .effets {<br/>
    background-color: red;<br/>
    opacity: 0.5;<br/>
    box-shadow: 6px 6px 3px #8d1919;<br/>
    border: 1px solid black;<br/>
    border-radius: 10px;<br/>
}</code>
                    <figcaption>
                        Un exemple d'utilisation des propriétés <code>opacity</code>, <code>box-shadow</code> et <code>border-radius</code>
                    </figcaption>
                </figure>
                <p>Comme tous les habitants de toutes les galaxies existantes, vous avez sans doute utilisé des dispositifs alambiqués pour obtenir des effets de transparence et d’ombre en CSS… Réjouissez-vous, ces jours de douleur sont maintenant derrière vous&nbsp;!
                    <br/> D’une simple propriété <code>opacity</code> dont vous fixerez la valeur entre 0 et 1 (0 étant totalement transparent et 1 totalement opaque), vous pouvez rendre votre élément plus ou moins transparent à volonté&nbsp;! Si c’est à une simple couleur de fond et non tout le contenu de l’élément que vous souhaitez appliquer cet effet, optez plutôt pour une notation de la couleur en RGBa, a réglant alors l’opacité selon les mêmes modalités que la propriété <code>opacity</code>.
                    <br/> Ce sont des ombres que vous voulez&nbsp;? Aucun problème&nbsp;! Les propriétés <code>box-shadow</code> et <code>text-shadow</code> sont là pour vous servir. Avec quatre valeurs, fixez le décalage horizontal et vertical de l’ombre par rapport à l’élément, son éventuel adoucissement et sa couleur.
                    <br/>Notez qu’il est parfois conseillé d’appliquer une bordure à l’élément (dans le cas d’un bloc) pour mieux voir cet effet d’ombre.
                    <br/> À propos de bordures, un progrès supplémentaire est arrivé sur Terre avec CSS&nbsp;3&nbsp;: essayez donc la propriété <code>border-radius</code> juste pour voir… Adieu les demi-bouteilles de gargle blaster pangalactique ingurgitées pour obtenir le même effet.
                </p>
            </article>
            <article>
                <h2>De nouveaux sélecteurs</h2>
                <figure class="code">
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <code>&lt;table&gt;<br/>
                        &lt;tr&gt;<br/>
                            &lt;td&gt;&lt;/td&gt;<br/>
                            &lt;td&gt;&lt;/td&gt;<br/>
                        &lt;/tr&gt;<br/>
                        &lt;tr&gt;<br/>
                            &lt;td&gt;&lt;/td&gt;<br/>
                            &lt;td&gt;&lt;/td&gt;<br/>
                        &lt;/tr&gt;<br/>
                    &lt;/table&gt;<br/>
                    table {<br/>
    border-collapse: collapse;<br/>
    width: 100px;<br/>
    height: 100px;<br/>
    margin: auto;<br/>
}<br/>

tr:first-child td:first-child, tr:last-child td:last-child {<br/>
    height: 50%;<br/>
    width: 50%;<br/>
    background-color: white;<br/>
}<br/>

tr:first-child td:last-child, tr:last-child td:first-child {<br/>
    height: 50%;<br/>
    width: 50%;<br/>
    background-color: black;<br/>
}<br/>
                    </code>
                    <figcaption>Un exemple d'utilisation des pseudo-classes <code>:first-child()</code> et <code>:last-child()</code></figcaption>
                </figure>
                <p>Vous pouvez maintenant atteindre plus d’éléments beaucoup plus facilement. Par exemple, l’opérateur&nbsp;<code>~</code> sélectionne tous les éléments successeurs d’un élément et vous pouvez aussi cibler un élément d’après la valeur de son attribut de façon plus pratique. Chouette, non&nbsp;?
                    <br/> Les nouvelles pseudo-classes <code>:nth-child()</code>, <code>:nth-of-type()</code> et leurs dérivés facilitent la sélection simultanée d’éléments positionnés de la même façon dans leur élément parent respectif ou d’éléments de même type quelle que soit leur position. La pseudo-classe <code>:not()</code> permet de sélectionner les éléments qui ne correspondent pas au critère spécifié.
                    <br/> La pseudo-classe <code>:target</code> est aussi très pratique pour atteindre un élément ciblé par un lien.
                </p>
            </article>
            
            <article>
                <h2 id="queries">Un design responsive avec les media queries</h2>
                <figure class="code">
                    <code>@media print {<br/>
                    body {<br/>
                    background-color: none;<br/>
                    }<br/>
                    menu {<br/>
                    display: none;<br/>
                    }<br/>
                    }</code>
                    <figcaption>À l'impression, l'arrière-plan sera incolore et le menu disparaîtra</figcaption>
                </figure>
                <p>Elles existaient déjà depuis CSS 2, mais ont été considérablement augmentées pour répondre au besoin d’adapter des sites web à tous les périphériques de la galaxie… et chacun sait qu’ils sont nombreux et variés. Toutes ces règles ne sont pas encore implémentées dans tous les navigateurs, hélas...
                    <br/> En ajoutant l’attribut <code>media</code> dans la balise link de votre head, vous pouvez appeler une feuille de style spécifique à un certain périphérique ou à une certaine dimension d’écran. Vous pouvez aussi passer ces règles directement dans la feuille de style courante.
                    <br/> Le principe est simple&nbsp;: il faut énoncer une règle qui soit vraie ou fausse pour chaque élément à l’aide des opérateurs logiques <code>and</code>, <code>not</code> et <code>only</code>.
                </p>
            </article>

            <article>
                <h2>Des animations simplifiées</h2>
                <figure class="code">
                    <p class="rotation">Passez la souris&nbsp;!
                    </p>
                    <code>&lt;p class="rotation"&gt;Rotation&lt;/p&gt;<br/>
                    .rotation:hover {<br/>
    transform: rotate(360deg);<br/>
    transition: transform 2s;<br/>
    -moz-transition: transform 2s; -o-transition: transform 2s; -ms-transition: transform 2s; -webkit-transition: transform 2s;<br/>
}</code>
                    <figcaption>Un exemple d'utilisation de <code>transform:rotate()</code> et <code>transition</code></figcaption>
                </figure>
                <p>Les propriétés <code>transition</code> et <code>transform</code> permettent de donner une apparence dynamique à votre site sans script ni php&nbsp;! Le carrousel qui vous a accueilli à votre arrivée sur le Guide est ainsi entièrement réalisé en CSS.
                    <br/>
                    <code>transform</code> permet de gérer rotations, inclinaisons, translations…
                    <br/>
                    <code>transition</code> est en fait une super-propriété réunissant dans l'ordre les propriétés <code>transition-property</code>, <code>transition-duration</code>, <code>transition-timing-function</code> et <code>transition-delay</code> pour régler la transition souhaitée dans ses moindres détails.<br/>
                    N’oubliez pas d’utiliser les préfixes propres à chaque navigateur pour assurer une compatibilité maximale&nbsp;: <code>-moz-</code>, <code>-o-</code>, <code>-ms-</code> et <code>-webkit-</code>.
                </p>
            </article>
        </section>
</main>
<aside class="retour">
    <a href="#"><img src="petunias.png" alt="un pot de pétunias" class="petunias" /></a>
</aside>