<div class="row">
    <h1>Cours de soutien WCS - Lyon PHP n°1</h1>

    <p class="bg-custom">Dans le cadre d'un cours de soutien entre Wilders (Elèves de la Wild Code School),
        nous avons créé cet exercice à partir du Checkpoint (mise à niveau) réalisé afin de revoir certaines parties de cours/pratiques tout en s'entraidant.</p>

    <hr>

    <p>Pour commencer, <strong>clône le projet</strong> :
        <code class="hljs"><span class="hljs-balise">git clone</span> https://github.com/splyy/WCS-StarWars.git</code></p>


    <p><strong>Créer ta branch</strong> Jedi :
        <code class="hljs"><span class="hljs-balise">git branch</span> NomDeMaBranch</code></p>

    <p>Et c'est parti ! Un <strong>Sith web</strong> tu développeras :)</p>

    <h2>Les détails ci-dessous tu liras</h2>
    <ul>
        <li>Un site pour nous aider avec le CRUD mais d'une façon super fun</li>
        <li>Le site a été réalisé à l'aide du Framework CSS/JS Bootstrap et l'architecture est déjà faite ;)</li>
    </ul>

    <h2>A long time ago, in a galaxy far, far away ...</h2>
    <p>La planète WCS-Lyon est en pleine guerre galactique. Ses habitants, les wilders, doivent maintenant choisir entre 4 factions...<br>
        Quel camp choisirez-vous ? <strong>Alliance</strong>, <strong>Empire</strong>, <strong>Jedi</strong> ou <strong>Sith</strong> ?</p>


    <hr class="separator">

    <h3>Épisode I. La menace du Sith Web</h3>

    <p>On sait que les développeurs <strong>Sith</strong> sont des flemmards alors on t'a beaucoup <em>(beaucoup, beaucoup, beaucoup ...)</em> aidé en t'avançant dans la structure du site <em>(et de tes dossiers)</em>,
        mais avant de devenir un Padawan, il va falloir finir la structure de ton Etoile Noir du Web ! Alors, rebrousse tes manches et finis moi tout ça.</p>
    <ul>
        <li>Tes pages communiquent entre elles (comme avec proceduralForm)</li>
        <li>Tu as bien segmenté ton contenu</li>
        <li>Tu as créer ta base de données</li>
    </ul>

    <br>
    <p>Quelques Wookies ont essayé d'effacer le tableau qui devait t'aider, malheureusement on a pu en récupérer qu'une partie :</p>
    <pre>
            <code class="hljs">
                <span class="hljs-balise">CREATE DATABASE</span> wcs-starwars;

                <span class="hljs-balise">CREATE TABLE</span> jedi (
                id <span class="hljs-balise">int</span> AUTO_INCREMENT,
                ...
                TODO
                ...
                <span class="hljs-balise">PRIMARY KEY</span>(id)
                );
            </code>
        </pre>

    <br>
    <div class="alert alert-info" role="alert">A toi de trouver là suite ...</div>

    <br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" href="#conseil-1">
                    <img src="http://icons.iconarchive.com/icons/fatcow/farm-fresh/32/user-yoda-icon.png" width="20"> Les Conseils de Maître Yoda
                </a>
            </h4>
        </div>
        <div id="conseil-1" class="panel-collapse collapse">
            <div class="panel-body">
                Perdu tu es sur la structure de ton site ? T'aider je vais !
                <ul>
                    <li><i class="fa fa-folder-open-o" aria-hidden="true"></i> config</li>
                    <ul>
                        <li><i class="fa fa-file-code-o" aria-hidden="true"></i> connexion-distrib.php</li>
                    </ul>
                    <li><i class="fa fa-folder-open-o" aria-hidden="true"></i> inc</li>
                    <ul>
                        <li><i class="fa fa-file-code-o" aria-hidden="true"></i> header.php</li>
                        <li><i class="fa fa-file-code-o" aria-hidden="true"></i> footer.php</li>
                    </ul>
                    <li><i class="fa fa-folder-open-o" aria-hidden="true"></i> page</li>
                    <ul>
                        <li><i class="fa fa-file-code-o" aria-hidden="true"></i> page1.php</li>
                        <li><i class="fa fa-file-code-o" aria-hidden="true"></i> page2.php</li>
                        <li><i class="fa fa-file-code-o" aria-hidden="true"></i> page3.php</li>
                    </ul>
                    <li><i class="fa fa-folder-open-o" aria-hidden="true"></i> public</li>
                    <ul>
                        <li><i class="fa fa-folder" aria-hidden="true"></i> css</li>
                        <li><i class="fa fa-folder" aria-hidden="true"></i> fonts</li>
                        <li><i class="fa fa-folder" aria-hidden="true"></i> img</li>
                        <li><i class="fa fa-folder" aria-hidden="true"></i> vendor</li>
                        <li><i class="fa fa-file-code-o" aria-hidden="true"></i> index.php</li>
                    </ul>
                    <li><i class="fa fa-folder-open-o" aria-hidden="true"></i> src</li>
                    <ul>
                        <li><i class="fa fa-file-code-o" aria-hidden="true"></i> Hmmmm, on met quoi ici ?</li>
                    </ul>
                </ul>

                <p>Tu dois faire communiquer tes pages entre <strong>/public/index.php</strong> et tes différents contenus présent dans <strong>/page</strong>, on t'a aidé sur la structure final du
                    site mais c'est à toi de gérer l'appel du contenu dès le clique d'un menu de ta navbar !</p>
            </div>
        </div>
    </div>

    <hr class="separator">

    <h3>Épisode II. L'Attaque des Formulaires</h3>

    <p>Afin de choisir ta faction il te sera demander de créer un formulaire. Et oui, la guerre est présente donc plus rien ne fonctionne.
        À toi de faire en sorte que tu puisses choisir ton camp <i>(quand même...)</i></p>

    <p>Plusieurs champs seront nécessaires afin de bien enregistrer tes informations et attention, <strong>Dark Vador</strong> et <strong>Maître Yoda</strong>
        <i>(ça leurs arrive de "chiller" ensemble)</i> veillent a ce que ça soit bien fait.</p>
    <ul>
        <ol>1. Un champ pour enregistrer ton Nom</ol>
        <ol>2. Un champ pour enregistrer ton Prénom</ol>
        <ol>3. Un champ pour enregistrer ton Sexe</ol>
        <ol>4. Un champ pour enregistrer ta Faction</ol>
    </ul>

    <br>
    <p>Vu qu'on est pas des méchants comme Boba Fett, on te file un coup de pouce pour les factions :</p>
    <pre>
            <code class="hljs html">
                <span class="hljs-balise">&lt;div</span> <span class="hljs-prop">class</span><span class="hljs-balise">=</span><span class="hljs-class">"form-group"</span><span class="hljs-balise">&gt;</span>
                    <span class="hljs-balise">&lt;label</span> <span class="hljs-prop">for</span><span class="hljs-balise">=</span><span class="hljs-class">"faction"</span><span class="hljs-balise">&gt;</span>Faction<span class="hljs-balise">&lt;/label&gt;</span>
                    <span class="hljs-balise">&lt;select</span> <span class="hljs-prop">class</span><span class="hljs-balise">=</span><span class="hljs-class">"form-control"</span> <span class="hljs-prop">id</span><span class="hljs-balise">=</span><span class="hljs-class">"faction"</span> <span class="hljs-prop">name</span><span class="hljs-balise">=</span><span class="hljs-class">"faction"</span><span class="hljs-balise">&gt;</span>
                        <span class="hljs-balise">&lt;option</span> <span class="hljs-prop">value</span><span class="hljs-balise">=</span><span class="hljs-class">"rebel"</span><span class="hljs-balise">&gt;</span>L'Alliance Rebelle<span class="hljs-balise">&lt;/option&gt;</span>
                        <span class="hljs-balise">&lt;option</span> <span class="hljs-prop">value</span><span class="hljs-balise">=</span><span class="hljs-class">"empire"</span><span class="hljs-balise">&gt;</span>L'Empire Galactique<span class="hljs-balise">&lt;/option&gt;</span>
                        <span class="hljs-balise">&lt;option</span> <span class="hljs-prop">value</span><span class="hljs-balise">=</span><span class="hljs-class">"jedi"</span><span class="hljs-balise">&gt;</span>L'Ordre des Jedi<span class="hljs-balise">&lt;/option&gt;</span>
                        <span class="hljs-balise">&lt;option</span> <span class="hljs-prop">value</span><span class="hljs-balise">=</span><span class="hljs-class">"sith"</span><span class="hljs-balise">&gt;</span>L'Ordre des Sith<span class="hljs-balise">&lt;/option&gt;</span>
                    <span class="hljs-balise">&lt;/select&gt;</span>
                <span class="hljs-balise">&lt;/div&gt;</span>
            </code>
        </pre>

    <br>
    <div class="alert alert-danger" role="alert">On te dit pas tout mais il faudra pas que tu oublies de connecter son site à ta base de données pour pouvoir enregistrer les informations de ton formulaire !</div>

    <br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" href="#conseil-2">
                    <img src="data:image/png;base64,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" width="20"> Les Conseils de Dark Vador
                </a>
            </h4>
        </div>
        <div id="conseil-2" class="panel-collapse collapse">
            <div class="panel-body">
                <p>La méthode <strong>$_POST['...']</strong> sera grandement utile pour récupérer les informations de ton formulaire §</p>
                <p>Un formulaire s'est bien joli, mais créer les fonctions qui vont avec c'est encore mieux ! Oublie pas que <strong>Dark Vador</strong>
                    voudra pouvoir autant ajouter un jedi, que le modifie ou le supprimer (par le pouvoir de la force). Pour ça, tu as juste besoin de
                    définir tes fonctions <strong>add(), edit(), delete()</strong> avec les bons paramètres pour que ça fonctionne, tout bêtement.
                </p>
                <p>
                    Allez, pour t'aider encore un peu plus : il faudra que tu gère une condition pour faire afficher le formulaire vide ou avec les
                    informations du Jedi, c'est-à-dire différencier ton étape add() de edit(). Tu pourras t'aider du proceduralForm qu'on a fait
                    jusqu'ici si besoin (ou même demander de l'aide ...)
                </p>
            </div>
        </div>
    </div>

    <hr class="separator">

    <h3>Épisode III. La Revanche des Listes</h3>

    <p>Et oui, on va quand même pas se taper les uns sur les autres. Du coup pour bien connaître tes alliés et tes ennemis, tu feras en sorte d'afficher chaque champ dans un tableau.
        En fonction de la faction choisis, une image différente sera présente (fournies dans le dossier img)</p>

    <p>Aussi, afin de ne pas toujours rester dans le même camp (bouuuuh les traîtres), il faudra que tu puisses <u>modifier</u> tes informations et voir les <u>supprimer</u> si tu veux déménager sur une autre planète.</p>

    <br>
    <p>Voici un petit visuel, pour te montrer ce qu'il faut faire :</p>

    <div class="table-responsive">
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Sexe</th>
                <th>Faction</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>H</td>
                <td>Empire Galactique</td>
                <td>
                    <a href="#" class="btn" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn" role="button"><i class="fa fa-times" aria-hidden="true"></i></a>
                </td>
            </tr><tr>
                <td>Princesse</td>
                <td>Leila</td>
                <td>F</td>
                <td>Alliance Rebelle</td>
                <td>
                    <a href="#" class="btn" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a href="#" class="btn" role="button"><i class="fa fa-times" aria-hidden="true"></i></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" href="#conseil-3">
                    <img src="https://maxcdn.icons8.com/Color/PNG/24/Cinema/r2-d2-24.png" width="20"> Les Conseils de R2-D2
                </a>
            </h4>
        </div>
        <div id="conseil-3" class="panel-collapse collapse">
            <div class="panel-body">
                <p>Je pense que tu auras fais le plus dure avec la gestion de ton formulaire ...</p>
                <p>Alors tout ce que je peux te donner comme conseil en tant que petit robot sur roulette : Créer toi une
                    function pour récupérer <strong>la liste des Jedi</strong> et grâce à une <strong>petite boucle</strong> tu pourras les afficher dans un tableau !</p>
            </div>
        </div>
    </div>

    <hr class="separator">

    <h3>Épisode IV. Un nouvel espoir <small>(Bonus)</small></h3>

    <ul class="bonus">
        <ol>
            1. Génération d'un pseudo à l'aide du nom ou du prénom :
            <ul>
                <li>* Deviens un Jedi ! Utilise "Obi-Prénom-Wan" (ex : Obi-Francois-wan)</li>
                <li>* Deviens un Sith ! Utilise "Dark Nom" (ex : Dark Gaub)</li>
                <li>* Deviens un Rebelle ! Utilise "Prénom Solo" (ex : Florence Solo)</li>
                <li>* Deviens un Stormtrooper ! Utilise "Prénom Fette" (ex : Amor Fett)</li>
            </ul>
        </ol>
        <ol>
            2. Faire afficher l'icône de la Faction dans ta liste
            <ul>
                <li>Tu as toutes les images nécessaires dans le dossier "public/img", à toi de te débrouiller pour que ça s'affiche en fonction de la faction :D</li>
            </ul>
        </ol>
        <ol>
            3. Faire afficher l'icône du Sexe
            <ul>
                <li>Tu trouveras le code des icônes sur FontAwesome (FontAwesome est déjà présent dans ton Vendor, pas besoin de rajouter un link ou autre !)</li>
            </ul>
        </ol>
    </ul>

    <hr>

    <p>Et voilà !<br>
        N'hésite pas à profiter que ce soit un cours de soutien entre nous pour demander de l'aide à tes camarades Wilders, on organise ça exprès :)<br><br>
        <strong>Un pour tous et tous pour un !</strong> <img src="https://wildcodeschool.fr/wp-content/uploads/2017/01/logo_orange_pastille.png" width="20"></p>
</div>