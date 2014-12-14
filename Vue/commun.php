<?php

// Génère le code HTML du formulaire de connexion
function formulaire(){
    ob_start();
    ?>
        <fieldset>
            <form method="POST" action="index.php?cible=verif">
                Identifiant
                <br/>
                <input type="text" name="identifiant"/>
                <br/>
                Mot de passe
                <br/>
                <input type="text" name="mdp"/>
                <br/>
                <input type='submit'/>
            </form>
        </fieldset>
    <?php
    $formulaire = ob_get_clean();
    return $formulaire;
}


function carousel(){
    ob_start();
    ?>
        <div class="container">
			<div id="ca-container" class="ca-container">
				<div class="ca-wrapper">
					<div class="ca-item ca-item-1">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Stop factory farming</h3>
							<h4>
								<span class="ca-quote">&ldquo;</span>
								<span>The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
							</h4>
								<a href="#" class="ca-more">more...</a>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6>Animals are not commodities</h6>
								<a href="#" class="ca-close">close</a>
								<div class="ca-content-text">
									<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
									<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream;</p>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
								<ul>
									<li><a href="#">Read more</a></li>
									<li><a href="#">Share this</a></li>
									<li><a href="#">Become a member</a></li>
									<li><a href="#">Donate</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ca-item ca-item-2">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Respect Life &amp; Rights</h3>
							<h4>
								<span class="ca-quote">&ldquo;</span>
								<span>I hold that the more helpless a creature, the more entitled it is to protection by man from the cruelty of man.</span>
							</h4>
								<a href="#" class="ca-more">more...</a>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6>Would you eat your dog?</h6>
								<a href="#" class="ca-close">close</a>
								<div class="ca-content-text">
									<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
									<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream;</p>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
								<ul>
									<li><a href="#">Read more</a></li>
									<li><a href="#">Share this</a></li>
									<li><a href="#">Become a member</a></li>
									<li><a href="#">Donate</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ca-item ca-item-3">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Become 100% meat-free</h3>
							<h4>
								<span class="ca-quote">&ldquo;</span>
								<span>I feel that spiritual progress does demand at some stage that we should cease to kill our fellow creatures for the satisfaction of our bodily wants.</span>
							</h4>
								<a href="#" class="ca-more">more...</a>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6>You can change the world</h6>
								<a href="#" class="ca-close">close</a>
								<div class="ca-content-text">
									<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
									<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream;</p>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
								<ul>
									<li><a href="#">Read more</a></li>
									<li><a href="#">Share this</a></li>
									<li><a href="#">Become a member</a></li>
									<li><a href="#">Donate</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ca-item ca-item-4">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Make a difference</h3>
							<h4>
								<span class="ca-quote">&ldquo;</span>
								<span>A man is but the product of his thoughts what he thinks, he becomes.</span>
							</h4>
								<a href="#" class="ca-more">more...</a>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6>Think globally, act locally</h6>
								<a href="#" class="ca-close">close</a>
								<div class="ca-content-text">
									<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
									<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream;</p>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
								<ul>
									<li><a href="#">Read more</a></li>
									<li><a href="#">Share this</a></li>
									<li><a href="#">Become a member</a></li>
									<li><a href="#">Donate</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ca-item ca-item-5">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Say no to killing</h3>
							<h4>
								<span class="ca-quote">&ldquo;</span>
								<span>A weak man is just by accident. A strong but non-violent man is unjust by accident.</span>
							</h4>
								<a href="#" class="ca-more">more...</a>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6>Animals have rights, too!</h6>
								<a href="#" class="ca-close">close</a>
								<div class="ca-content-text">
									<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
									<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream;</p>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
								<ul>
									<li><a href="#">Read more</a></li>
									<li><a href="#">Share this</a></li>
									<li><a href="#">Become a member</a></li>
									<li><a href="#">Donate</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ca-item ca-item-6">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Don't believe the lies</h3>
							<h4>
								<span class="ca-quote">&ldquo;</span>
								<span>An error does not become truth by reason of multiplied propagation, nor does truth become error because nobody sees it.</span>
							</h4>
								<a href="#" class="ca-more">more...</a>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6>How essential is meat?</h6>
								<a href="#" class="ca-close">close</a>
								<div class="ca-content-text">
									<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
									<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream;</p>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
								<ul>
									<li><a href="#">Read more</a></li>
									<li><a href="#">Share this</a></li>
									<li><a href="#">Become a member</a></li>
									<li><a href="#">Donate</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ca-item ca-item-7">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Save the planet</h3>
							<h4>
								<span class="ca-quote">&ldquo;</span>
								<span>A small body of determined spirits fired by an unquenchable faith in their mission can alter the course of history.</span>
							</h4>
								<a href="#" class="ca-more">more...</a>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6>Collateral damage?</h6>
								<a href="#" class="ca-close">close</a>
								<div class="ca-content-text">
									<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
									<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream;</p>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
								<ul>
									<li><a href="#">Read more</a></li>
									<li><a href="#">Share this</a></li>
									<li><a href="#">Become a member</a></li>
									<li><a href="#">Donate</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ca-item ca-item-8">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>It's time to move on</h3>
							<h4>
								<span class="ca-quote">&ldquo;</span>
								<span>A nation's culture resides in the hearts and in the soul of its people.</span>
							</h4>
								<a href="#" class="ca-more">more...</a>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6>Let's finally become humans</h6>
								<a href="#" class="ca-close">close</a>
								<div class="ca-content-text">
									<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
									<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream;</p>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
								<ul>
									<li><a href="#">Read more</a></li>
									<li><a href="#">Share this</a></li>
									<li><a href="#">Become a member</a></li>
									<li><a href="#">Donate</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
		<script type="text/javascript" src="js/jquery.min.js"></script>
                <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<!-- the jScrollPane script -->
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
		<script type="text/javascript">
			$('#ca-container').contentcarousel();
		</script>
    <?php
    $carousel = ob_get_clean();
    return $carousel;
}


// Génère le code HTML de l'entête
function entete($titre){
    ob_start();
    ?>
        <h1>
            <?php echo($titre);?>
        </h1>
            <?php echo('url(../images/banniere_haut.png)') ?>
    <?php
    $entete = ob_get_clean();
    return $entete;
}


// Génère le code HTML du menu
// le lien associé à l'étape courante est mis en couleur
function menu($etape){
    ob_start();
    ?>
        <ul class="menu">
            <?php 
                if($etape=="accueil"){
                    echo('<li><a href="index.php?cible=accueil"><span class="selection">Accueil</span></a></li>');
                } else {
                    echo('<li><a href="index.php?cible=accueil">Accueil</a></li>');
                }
                
                if($etape=="recherche"){
                    echo('<li><a href="index.php?cible=recherche"><span class="selection">Recherche</span></a></li>');
                } else {
                    echo('<li><a href="index.php?cible=recherche">Recherche</a></li>');
                }
                
                if($etape=="moncompte"){
                    echo('<li><a href="index.php?cible=moncompte"><span class="selection">Mon Compte</span></a></li>');
                } else {
                    echo('<li><a href="index.php?cible=moncompte">Mon Compte</a></li>');
                }
                
                if($etape=="forum"){
                    echo('<li><a href="index.php?cible=forum"><span class="selection">Forum</span></a></li>');
                } else {
                    echo('<li><a href="index.php?cible=forum">Forum</a></li>');
                }
                
                //echo '<li><a href="index.php?cible=deconnexion">Deconnexion</a></li>';
            ?>
        </ul>
    <?php
    $menu = ob_get_clean();
    return $menu;
}

// Génère le code HTML du pied de page
// même code pour toutes les pages
function pied(){
    ob_start();
    ?>
        <span style="font-style:italic;">Pied de page</span>
    <?php
    $pied = ob_get_clean();
    return $pied;
}


function sousmenucompte($sousetape){
    ob_start();
    ?>
        <ul>
            <?php 
                if($sousetape=="mesinfos"){
                    echo('<li><a href="index.php?cible=moncompte"><span class="selection">Mes informations personnelles</span></a></li>');
                } else {
                    echo('<li><a href="index.php?cible=moncompte">Mes informations personnelles</a></li>');
                }
                
                if($sousetape=="meslog"){
                    echo('<li><a href="index.php?cible=meslog"><span class="selection">Mes logements</span></a></li>');
                } else {
                    echo('<li><a href="index.php?cible=meslog">Mes logements</a></li>');
                }
                
                if($sousetape=="mesmess"){
                    echo('<li><a href="index.php?cible=mesmess"><span class="selection">Ma messagerie</span></a></li>');
                } else {
                    echo('<li><a href="index.php?cible=mesmess">Ma messagerie</a></li>');
                }
                
                //echo '<li><a href="index.php?cible=deconnexion">Deconnexion</a></li>';
            ?>
        </ul>
    <?php
    $menu = ob_get_clean();
    return $menu;
}


function ajoutlog(){
    ob_start();
    ?>
    <h1>Inscription d'un nouveau logement :</h1>
    <?php
    
        //Connexion à la base de donnée
        include (Modele/connexion.php);
        
        //Vérifier si le formulaire a été envoyé
        if(empty($_POST)) {
                echo(formlog());
                
        } else {
                // Vérifier qu'il n'y a pas d'erreurs
                $error = array();
                if (empty($_POST['adresse'])) {
                        $error["adresse"] = "Il n'y a pas d'adresse";
                        echo ($error['adresse']);
                } 
                if (empty($_POST['ville'])) {
                        $error["ville"] = array("Il n'y a pas de ville");
                } 
                if (empty($_POST['taille'])) {
                        $error["taille"] = array("Vous n'avez pas précisé la taille");
                } 
                if(count($error)>0) {
                    echo(formlog());
                }
                if(count($error)==0) { // Insertion du formulaire ds la bdd
                $coucou="1";
                $req = $bdd->prepare('INSERT INTO appart(adresse, ville, taille, nombrepiece, nbrepers, iduser) VALUES(?, ?, ?, ?, ?, ?)');
                $req->execute(array(
                        $_POST['adresse'], 
                        $_POST['ville'], 
                        $_POST['taille'], 
                        $_POST['nombrepiece'],
                        $_POST['personne'],
                        $coucou
                        ));
                echo 'Votre appartement a bien été enregistré' ;
                }
        }

    $ajoutlog = ob_get_clean();
    return $ajoutlog;
}
    
function formlog(){
    ob_start();
    global $error;
    ?>
    <form method="post" action="index.php?cible=inscrlog"> <!--<form method="post" action="reception.php" enctype="multipart/form-data">-->
    <!-- Vérification erreur -->
    <?php if (isset($error["adresse"])&&!empty($error["adresse"])) { ?> <!-- si il y a une erreur et que la variable error associée à nomE existe -->

        <div class="error"><?php echo $error["adresse"] ?></div> <!-- affiche l'erreur -->
    <?php } ?>

    <label for="adresse">Adresse</label><br/>
    <!-- Ajout du champ prérempli -->
    <input type="texte" name="adresse" value="<?php (isset($_POST["adresse"])&&!empty($_POST["adresse"]))? $_POST["nomE"]: "";?>"><br />
    <!--//ligne précédente rajoute la variable nomI si le champ avait été rempli auparavant.-->

    <label for="ville">Ville :</label><br />
    <input type="text" name="ville" /><br /><br />
    <label for="taille">Taille du logement (en m²) :</label><br />
    <input type="text" name="taille" /><br /><br />
    <label for="nombrepiece">Combien de pièces y a-t-il dans votre appartement ?<br />
        <select name="nombrepiece">
        <option value="1" selected="selected">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15 ou +</option>
        </select> <br /><br />
    <label for="personne">Combien de personnes pouvez-vous acceuillir ?<br />
        <select name="personne">
        <option value="1" selected="selected">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15 ou +</option>
        </select> <br /><br />
    <label for="description">Description du logement :</label></br>
    <textarea name="description" rows="8" cols="45">
    Votre Description
    </textarea> <br />
    <p>Autorisez vous dans votre logement :</p>

    Les fumeurs
    <input type="radio" name="fumeurs" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
    <input type="radio" name="fumeurs" value="non" id="non" /> <label for="non">Non</label><br />

    Les animaux
    <input type="radio" name="animaux" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
    <input type="radio" name="animaux" value="non" id="non" /> <label for="non">Non</label><br />

    Les enfants
    <input type="radio" name="enfants" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
    <input type="radio" name="enfants" value="non" id="non" /> <label for="non">Non</label><br /></br>
    <!-- <label for="photo1">Ajoutez une photo du logement :</label><br />
    <input type="file" name="photo1" id="photo1"><br /><br /> -->
    <input type="submit" value="Valider" />
    </form>
    </body>
    </html>
    
    <?php
    $formlog = ob_get_clean();
    return $formlog;
}