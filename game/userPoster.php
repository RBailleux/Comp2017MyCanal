<?php
// 	header ("Content-type: image/png");
// 	require_once 'generatePoster.php';
// 	$poster = new generatePoster('film', 'soleil.jpg', 'drama', 'Le soleil ça brule', 'ffffff', 'Barbecue party');
// 	imagepng($poster->getImage(), 'test.png');
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
	<button class="btn btn-primary nextStep" data-step="1">Commencer</button>
<?php 

}
function step1(){
	$arrayCategories= ['Film','Série','Documentaire'];
	foreach ($arrayCategories as $category) {
	?>
		<button class="btn btn-primary nextStep" data-step="2" data-category="<?php echo $category;?>"><?php echo $category;?></button>
	<?php 
	}
}
function step2(){
?>
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
	jQuery('button.nextStep').click(function(event){
		event.preventDefault();
		jQuery('#customPoster').addClass('loading');
		var step = jQuery(this).attr('data-step');
		setCookie('step', step, 30);
		
		switch(step){
			case '1':
				jQuery('#customPoster').load('./game/userPoster.php?step='+step, function() {
					jQuery('#customPoster').removeClass('loading');
					jQuery('button.nextStep').click(function(){
						category = jQuery(this).attr('data-category');
						setCookie('category', category, 30);
					});
				});
				break;
			case '2':
				jQuery('#customPoster').load('./game/userPoster.php?step='+step, function(){
					jQuery('#customPoster').removeClass('loading');
					jQuery('button.nextStep').click(function(){
						name = jQuery('#customPoster .stepName').val();
						setCookie('name', name, 30);
					});
				});
				break;
			case '3':
				break;
			case '4':
				break;
			default:
				break;
			
		}
	});
});
</script>