<?php
main();
function main(){
	if(!isset($_GET['step'])){
		$step = 0;
	}
	else{
		$step = $_GET['step'];
	}
	
	switch($step){
		case '0':
			step0();
			break;
		case '1':
			step1();
			break;
		case '2':
			step2();
			break;
		case '3':
			step3();
			break;
		case '4':
			step4();
			break;
		default:
			stepError();
			break;
	}
}


function step0(){
?>
				<div class="col-sm-6 col-xs-12 custom-left row no-margin">
					<div class="col-xs-12">
						<p class="generator-desc">Devenez créateur de contenu original</p>
					</div>
					<div class="col-xs-12 words-container examples-container" style="height:450px" data-doexamples="1">
						<div class="generator-main symbols">
							<p>+</p>
							<p>+</p>
							<p>=</p>
						</div>
						<div class="generator-main words">
							<div class="generator-step word" data-custom-step="1">
								<span class="diamond">Sélectionnez un décor</span>
								<div class="generator-backgrounds-list" style="display:none;">
									<p data-background-name="aeroport">Aéroport</p>
									<p data-background-name="avion">Avion</p>
									<p data-background-name="casino">Casino</p>
									<p data-background-name="chambre">Chambre</p>
									<p data-background-name="chateau">Chateau</p>
									<p data-background-name="ciel">Ciel</p>
									<p data-background-name="cirque">Cirque</p>
									<p data-background-name="club">Club</p>
									<p data-background-name="desert">Désert</p>
									<p data-background-name="ecole">École</p>
									<p data-background-name="eglise">Église</p>
									<p data-background-name="fete-foraine">Fête foraine</p>
									<p data-background-name="foret">Forêt</p>
									<p data-background-name="galaxie">Galaxie</p>
									<p data-background-name="hopital">Hôpital</p>
									<p data-background-name="jungle">Jungle</p>
									<p data-background-name="mer">Mer</p>
									<p data-background-name="montagne">Montagne</p>
									<p data-background-name="sous-marin">Sous-marin</p>
									<p data-background-name="tour-eiffel">Tour Eiffel</p>
								</div>
							</div>
							<div class="generator-step word" data-custom-step="2">
								<span class="diamond">Sélectionnez un genre</span>
								<div class="generator-genres-list" style="display:none;">
									<p data-genre-name="action">Action</p>
									<p data-genre-name="autobiographie">Autobiographie</p>
									<p data-genre-name="cartoon">Cartoon</p>
									<p data-genre-name="catastrophe">Catastrophe</p>
									<p data-genre-name="comedie">Comédie</p>
									<p data-genre-name="drame">Drame</p>
									<p data-genre-name="erotique">Érotique</p>
									<p data-genre-name="fantastique">Fantastique</p>
									<p data-genre-name="film-auteur">Film d'auteur</p>
									<p data-genre-name="historique">Historique</p>
									<p data-genre-name="horreur">Horreur</p>
									<p data-genre-name="medieval">Médiéval</p>
									<p data-genre-name="romance">Romance</p>
									<p data-genre-name="science-fiction">Science-fiction</p>
									<p data-genre-name="thriller">Thriller</p>
									<p data-genre-name="western">Western</p>
								</div>
							</div>
							<div class="generator-step word" data-custom-step="3">
								<span class="diamond">Sélectionnez un personnage</span>
								<div class="generator-characters-list" style="display:none;">
									<p data-character-name="animaux">Animaux</p>
									<p data-character-name="businessman">Homme d'affaire</p>
									<p data-character-name="catcheur">Catcheur</p>
									<p data-character-name="couple">Couple</p>
									<p data-character-name="creature">Créature</p>
									<p data-character-name="danseuse">Danseuse / danseur</p>
									<p data-character-name="enfant">Enfant</p>
									<p data-character-name="facteur">Facteur</p>
									<p data-character-name="fashionista">Fashionista</p>
									<p data-character-name="fille">Fille</p>
									<p data-character-name="gangster">Gangster</p>
									<p data-character-name="geek">Geek</p>
									<p data-character-name="hacker">Hacker</p>
									<p data-character-name="magicien">Magicien</p>
									<p data-character-name="medecin">Médecin</p>
									<p data-character-name="militaire">Militaire</p>
									<p data-character-name="policier">Policier</p>
									<p data-character-name="pompier">Pompier</p>
									<p data-character-name="pompom-girl">Pompom girl</p>
									<p data-character-name="robot">Robot</p>
									<p data-character-name="rockeur">Rockeur</p>
									<p data-character-name="roi">Roi</p>
									<p data-character-name="rugbyman">Rugbyman</p>
									<p data-character-name="sauvage">Sauvage</p>
									<p data-character-name="sportif">Sportif</p>
									<p data-character-name="sumo">Sumo</p>
									<p data-character-name="viking">Viking</p>
								</div>
							</div>
							<div class="generator-step word generator-input" data-custom-step="4">
								<input type="text" placeholder="Tapez le nom de votre série" maxlength="30">
								<span class="diamond copyfrominput">TAPEZ LE NOM DE VOTRE SÉRIE</span>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="generator-step generator-submit center">
							<button class="btn btn-primary btn-big">Générer</button>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 custom-right">

				</div>
<?php 

}
function step1(){
?>
	<div class="loader-spinner">
		<div class="cube1"></div>
		<div class="cube2"></div>
	</div>
<?php 
	$arrayCategories= ['Film','Série','Documentaire'];
	foreach ($arrayCategories as $category) {
	?>
		<button class="btn btn-primary nextStep" data-step="2" data-category="<?php echo $category;?>"><?php echo $category;?></button>
	<?php 
	}
}
function step2(){
?>
	<div class="loader-spinner">
		<div class="cube1"></div>
		<div class="cube2"></div>
	</div>
	<div class="form-group">
		<input class="stepName" type="text" name="name" class="form-control" required>
		<button class="btn btn-primary nextStep" data-step="3">Commencer</button>
	</div>
<?php 
}
function step3(){
	echo '3';
}
function step4(){
	echo '4';
}
function stepError(){
	echo 'stepError';
}
?>

<script>
jQuery(document).ready(function(){
	var topHeight = jQuery('#customPoster h1').outerHeight()+'px';
	jQuery('#customPoster .custom-left').css('padding-top', topHeight);

	jQuery('#customPoster .diamond').each(function(){
		jQuery(this).css('width',jQuery(this).outerWidth()+30+'px')
	})
// 	jQuery('.generator-step.word').click(function(event){
// 		console.log(jQuery(this).data('custom-step'));
// 	});
	jQuery('.generator-input input').keyup(function(){
		var text = jQuery('.generator-input input').val();
		if(text == ""){
			text = "TAPEZ LE NOM DE VOTRE SÉRIE";
		}
		jQuery('.generator-input .copyfrominput').text(text);
		
	});

	//DECOR BEGIN
	jQuery('.generator-step.word[data-custom-step="1"]').click(function(){
		jQuery(this).toggleClass('isOpen');
		if(jQuery(this).hasClass('isOpen')){
			jQuery('.generator-step.word').not(this).css('display','none');
			jQuery('.generator-main.symbols').css('display','none');
			jQuery('.generator-backgrounds-list').css('display','block');
		}
		else{
			jQuery('.generator-step.word').css('display','block');
			jQuery('.generator-main.symbols').css('display','block');
			jQuery('.generator-backgrounds-list').css('display','none');
		}
	});

	jQuery('.generator-backgrounds-list p').click(function(){
		var background = jQuery(this).text();
		jQuery('.generator-step.word[data-custom-step="1"] span').text(background);
		jQuery('.generator-step.word[data-custom-step="1"] span').attr('data-selected-background', jQuery(this).data('background-name'));

		setTimeout(function(){
			jQuery('#customPoster .generator-step.word[data-custom-step="1"] .diamond').each(function(){
				jQuery(this).css('width','auto');
				jQuery(this).css('width',jQuery(this).outerWidth()+30+'px')
			});
			jQuery('.generator-step.word').css('display','block');
			jQuery('.generator-main.symbols').css('display','block');
			jQuery('.generator-backgrounds-list').css('display','none');
		},1);
	});
	//DECOR END
	
	//GENRE BEGIN
	jQuery('.generator-step.word[data-custom-step="2"]').click(function(){
		jQuery(this).toggleClass('isOpen');
		if(jQuery(this).hasClass('isOpen')){
			jQuery('.generator-step.word').not(this).css('display','none');
			jQuery('.generator-main.symbols').css('display','none');
			jQuery('.generator-genres-list').css('display','block');
		}
		else{
			jQuery('.generator-step.word').css('display','block');
			jQuery('.generator-main.symbols').css('display','block');
			jQuery('.generator-genres-list').css('display','none');
		}
	});

	jQuery('.generator-genres-list p').click(function(){
		var genre = jQuery(this).text();
		jQuery('.generator-step.word[data-custom-step="2"] span').text(genre);
		jQuery('.generator-step.word[data-custom-step="2"] span').attr('data-selected-genre', jQuery(this).data('genre-name'));

		setTimeout(function(){
			jQuery('#customPoster .generator-step.word[data-custom-step="2"] .diamond').each(function(){
				jQuery(this).css('width','auto');
				jQuery(this).css('width',jQuery(this).outerWidth()+30+'px')
			});
			jQuery('.generator-step.word').css('display','block');
			jQuery('.generator-main.symbols').css('display','block');
			jQuery('.generator-genres-list').css('display','none');
		},1);
	});
	//GENRE END
	
	//CHARACTERS BEGIN
	jQuery('.generator-step.word[data-custom-step="3"]').click(function(){
		jQuery(this).toggleClass('isOpen');
		if(jQuery(this).hasClass('isOpen')){
			jQuery('.generator-step.word').not(this).css('display','none');
			jQuery('.generator-main.symbols').css('display','none');
			jQuery('.generator-characters-list').css('display','block');
		}
		else{
			jQuery('.generator-step.word').css('display','block');
			jQuery('.generator-main.symbols').css('display','block');
			jQuery('.generator-characters-list').css('display','none');
		}
	});

	jQuery('.generator-characters-list p').click(function(){
		var character = jQuery(this).text();
		jQuery('.generator-step.word[data-custom-step="3"] span').text(character);
		jQuery('.generator-step.word[data-custom-step="3"] span').attr('data-selected-character', jQuery(this).data('character-name'));

		setTimeout(function(){
			jQuery('#customPoster .generator-step.word[data-custom-step="3"] .diamond').each(function(){
				jQuery(this).css('width','auto');
				jQuery(this).css('width',jQuery(this).outerWidth()+30+'px')
			});
			jQuery('.generator-step.word').css('display','block');
			jQuery('.generator-main.symbols').css('display','block');
			jQuery('.generator-characters-list').css('display','none');
		},1);
	});
	//CHARACTERS END
	
	//DO THE MAGICAL STUFF
	jQuery('.generator-submit button').click(function(){
		var background = jQuery('.generator-step.word[data-custom-step="1"] span').attr('data-selected-background');
		var genre = jQuery('.generator-step.word[data-custom-step="2"] span').attr('data-selected-genre');
		var character = jQuery('.generator-step.word[data-custom-step="3"] span').attr('data-selected-character');
		var name = encodeURI(jQuery('.generator-input input').val());
		//jQuery('#customPoster #generator .custom-right').load('./game/finalPoster.php?background='+background+'&genre='+genre+'&character='+character+'&name='+name);
		var url = './game/finalPoster.php?background='+background+'&genre='+genre+'&character='+character+'&name='+name
		jQuery('#customPoster #generator .custom-right').html(
			'<img class="myGeneratedPoster" src="'+url+'">'
		);
	});
	
	
// 	jQuery('button.nextStep').click(function(event){
// 		event.preventDefault();
// 		var step = jQuery(this).attr('data-step');
// 		setCookie('step', step, 30);
// 		jQuery('.loader-spinner').show();
// 		switch(step){
// 			case '1':
// 				jQuery('#customPoster').load('./game/userPoster.php?step='+step, function() {
// 					jQuery('.loader-spinner').hide();
// 					jQuery('button.nextStep').click(function(){
// 						category = jQuery(this).attr('data-category');
// 						setCookie('category', category, 30);
// 					});
// 				});
// 				break;
// 			case '2':
// 				jQuery('#customPoster').load('./game/userPoster.php?step='+step, function(){
// 					jQuery('.loader-spinner').hide();
// 					jQuery('button.nextStep').click(function(){
// 						name = jQuery('#customPoster .stepName').val();
// 						setCookie('name', name, 30);
// 					});
// 				});
// 				break;
// 			case '3':
// 				jQuery('#customPoster').load('./game/userPoster.php?step='+step, function(){
// 					jQuery('.loader-spinner').hide();
// 					jQuery('button.nextStep').click(function(){
// 						name = jQuery('#customPoster .stepName').val();
// 						setCookie('name', name, 30);
// 					});
// 				});
// 				break;
// 			case '4':
// 				break;
// 			default:
// 				break;
			
// 		}
// 	});
});
</script>