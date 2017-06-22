<?php
	class generatePoster{
		public $backgroundList = array(
				'aeroport',
				'avion',
				'casino',
				'chambre',
				'chateau',
				'ciel',
				'cirque',
				'club',
				'desert',
				'ecole',
				'eglise',
				'fete-foraine',
				'foret',
				'galaxie',
				'hopital',
				'jungle',
				'mer',
				'montagne',
				'sous-marin',
				'tour-eiffel'
		);
		public $characterList = array(
				'animaux',
				'businessman',
				'catcheur',
				'couple',
				'creature',
				'danseuse',
				'enfant',
				'facteur',
				'fashionista',
				'femme',
				'gangster',
				'geek',
				'hacker',
				'licorne',
				'magicien',
				'medecin',
				'militaire',
				'policier',
				'pompier',
				'pompom-girl',
				'robot',
				'rockeur',
				'roi',
				'rugbyman',
				'sauvage',
				'sportif',
				'sumo',
				'viking'
		);
		public $genreList = array(
				'action',
				'autobiographie',
				'cartoon',
				'catastrophe',
				'comedie',
				'drame',
				'erotique',
				'fantastique',
				'film-auteur',
				'historique',
				'horreur',
				'medieval',
				'romance',
				'science-fiction',
				'thriller',
				'western'
		);
		public $descriptionList = array(
				'action' => array(
						'Dur d\'avancer à deux quand l\'un bloque sur le passé',
						'Seul on va plus vite, à deux on va plus loin ',
						'Il y a toujours plus fort que nous',
						'Serré sous la couette',
						'L\'hiver arrive, ils auront besoin de leurs bonnets',
						'Sa survie est dans ses mains',
						'Deux pour le prix d’une'
				),
				'autobiographie' => array(
						'Des fois tu gagnes, des fois tu apprends',
						'Riches de nos misères',
						'Et si c\'était vous ?',
						'Tu m\'enlève ça de la bouche'
				),
				'cartoon' => array(
						'Le plus gentil des oursons',
						'Deux boules de glace plus tard',
						'La contre-attaque saisonnière'
				),
				'catastrophe' => array(
						'Nous ne sommes pas seuls',
						'Ici pour souffrir',
						'Sa survie est dans ses mains'
				),
				'comedie' => array(
						'Un jour, quelqu\'un',
						'The Floor is Lava',
						'Et si c\'était vous ?',
						'La comédie de l’année',
						'Serré sous la couette',
						'Deux boules de glace plus tard',
						'L\'amour avec un grand H',
						'Ici pour souffrir',
						'J\'ai fait des crêpes avant de mourir',
						'Vous ne le verrez plus jamais de la même façon',
						'Le plus gentil des oursons',
						'À la recherche de la baguette magique'
				),
				'drame' => array(
						'Riches de nos misères',
						'C\'est leur choix de vies',
						'Désolé d\'être parti si tôt',
						'L\'amour avec un grand H',
						'Ici pour souffrir',
						'Sa survie est dans ses mains',
						'Quand les choses vont dans une mauvaise direction,<br>ne les accompagnez pas',
						'Ils arrivent trottinant, il leur manque deux pieds',
						'J\'ai fait des crêpes avant de mourir',
						'La contre-attaque saisonnière',
						'Tu m\'enlève ça de la bouche'
				),
				'erotique' => array(
						'Seul on va plus vite, à deux on va plus loin ',
						'Il y a toujours plus fort que nous',
						'Ils n\'en reviendront pas vivants',
						'Serré sous la couette',
						'Deux boules de glace plus tard',
						'Deux pour le prix d’une',
						'À la recherche de la baguette magique',
						'La contre-attaque saisonnière',
						'Un étalon flamboyant qui tire plus vite que son ombre',
						'Tu m\'enlève ça de la bouche'
				),
				'fantastique' => array(
						'Seul on va plus vite, à deux on va plus loin ',
						'Un jour, quelqu\'un',
						'Ils n\'en reviendront pas vivants',
						'C\'est leur choix de vies',
						'Quand les choses vont dans une mauvaise direction,<br>ne les accompagnez pas',
						'Le rêve et la réalité font partie de la vie,<br>il faut seulement savoir les distinguer',
						'À la recherche de la baguette magique',
						'La contre-attaque saisonnière',
						'Un étalon flamboyant qui tire plus vite que son ombre'
				),
				'film-auteur' => array(
						'Les anges viennent du ciel, mais moi je t\'ai trouvé sur terre',
						'Dur d\'avancer à deux quand l\'un bloque sur le passé',
						'Et si c\'était vous ?',
						'Quand les choses vont dans une mauvaise direction,<br>ne les accompagnez pas',
						'Le rêve et la réalité font partie de la vie,<br>il faut seulement savoir les distinguer',
						'Vous ne le verrez plus jamais de la même façon',
						'Tu m\'enlève ça de la bouche'
				),
				'historique' => array(
						'Riches de nos misères',
						'Sa survie est dans ses mains',
						'Ici pour souffrir'
				),
				'horreur' => array(
						'Nous ne sommes pas seuls',
						'Sa survie est dans ses mains',
						'Ils arrivent trottinant, il leur manque deux pieds',
						'J\'ai fait des crêpes avant de mourir',
						'Le plus gentil des oursons'
				),
				'medieval' => array(
						'Ils n\'en reviendront pas vivants',
						'Nous ne sommes pas seuls',
						'Ici pour souffrir'
				),
				'romance' => array(
						'Les anges viennent du ciel, mais moi je t\'ai trouvé sur terre',
						'Dur d\'avancer à deux quand l\'un bloque sur le passé',
						'Seul on va plus vite, à deux on va plus loin ',
						'Il y a toujours plus fort que nous',
						'C\'est leur choix de vies',
						'Désolé d\'être parti si tôt',
						'La comédie de l’année',
						'L\'amour avec un grand H',
						'Ici pour souffrir',
						'Tu m\'enlève ça de la bouche'
				),
				'science-fiction' => array(
						'Ils n\'en reviendront pas vivants',
						'The Floor is Lava',
						'Nous ne sommes pas seuls',
						'Deux boules de glace plus tard',
						'L\'hiver arrive, ils auront besoin de leurs bonnets',
						'Ici pour souffrir',
						'Sa survie est dans ses mains',
						'Deux pour le prix d’une',
						'Le rêve et la réalité font partie de la vie,<br>il faut seulement savoir les distinguer',
						'J\'ai fait des crêpes avant de mourir',
						'La contre-attaque saisonnière'
				),
				'thriller' => array(
						'Un jour, quelqu\'un',
						'Riches de nos misères',
						'Nous ne sommes pas seuls',
						'Désolé d\'être parti si tôt',
						'Deux boules de glace plus tard',
						'L\'hiver arrive, ils auront besoin de leurs bonnets',
						'Ici pour souffrir',
						'Sa survie est dans ses mains',
						'Ils arrivent trottinant, il leur manque deux pieds',
						'J\'ai fait des crêpes avant de mourir',
						'À la recherche de la baguette magique',
						'La contre-attaque saisonnière',
						'Tu m\'enlève ça de la bouche'
				),
				'western' => array(
						'Il y a toujours plus fort que nous',
						'Vous ne le verrez plus jamais de la même façon',
						'Un étalon flamboyant qui tire plus vite que son ombre'
				)
// 				'Des fois tu gagnes, des fois tu apprends',
// 				'Les anges viennent du ciel, mais moi je t\'ai trouvé sur terre',
// 				'Dur d\'avancer à deux quand l\'un bloque sur le passé',
// 				'Seul on va plus vite, à deux on va plus loin ',
// 				'Un jour, quelqu\'un',
// 				'Riches de nos misères',
// 				'Il y a toujours plus fort que nous',
// 				'Ils n\'en reviendront pas vivants',
// 				'The Floor is Lava',
// 				'Nous ne sommes pas seuls',
// 				'Et si c\'était vous ?',
// 				'C\'est leur choix de vies',
// 				'Désolé d\'être parti si tôt',
// 				'La comédie de l’année',
// 				'Serré sous la couette',
// 				'Deux boules de glace plus tard',
// 				'L\'hiver arrive, ils auront besoin de leurs bonnets',
// 				'L\'amour avec un grand H',
// 				'Ici pour souffrir',
// 				'Sa survie est dans ses mains',
// 				'Deux pour le prix d’une',
// 				'Quand les choses vont dans une mauvaise direction,<br>ne les accompagnez pas',
// 				'Le rêve et la réalité font partie de la vie,<br>il faut seulement savoir les distinguer',
// 				'Ils arrivent trottinant, il leur manque deux pieds',
// 				'J\'ai fait des crêpes avant de mourir',
// 				'Vous ne le verrez plus jamais de la même façon',
// 				'Le plus gentil des oursons',
// 				'À la recherche de la baguette magique',
// 				'La contre-attaque saisonnière',
// 				'Un étalon flamboyant qui tire plus vite que son ombre',
// 				'Tu m\'enlève ça de la bouche'
		);
		public $character;
		public $background;
		public $genre;
		public $name;
		public $color;
		public $description;
		public $image;
		public $logoHigh = 74;
		public $pngName;
		
		public function __construct($character = ' ', $background = ' ', $genre = ' ', $name = 'Je profite d\'un mois gratuit')
		{
			$this->background = in_array($background, $this->backgroundList) ? $background : $this->backgroundList[array_rand($this->backgroundList, 1)];
			$this->character = in_array($character, $this->characterList) ? $character : $this->characterList[array_rand($this->characterList, 1)];
			$this->genre = in_array($genre, $this->genreList) ? $genre : $this->genreList[array_rand($this->genreList, 1)];
			$this->name = $name;
			$this->description = $this->descriptionList[$this->genre][array_rand($this->descriptionList[$this->genre], 1)];
			$this->image = $this->randomImageFromBackground();
			$this->color = imagecolorallocate($this->image, 255, 255, 255);
			$this->createImage();
		}
		
		public function randomImageFromBackground()
		{
			$randomImage = rand(
					1,
					$this->countFileInFolder('imageBase/backgrounds/'.$this->background)
			).'.png';
			return imagecreatefrompng('imageBase/backgrounds/'.$this->background.'/'.$randomImage);
		}
		
		protected function countFileInFolder($folder){
			$fi = new FilesystemIterator($folder, FilesystemIterator::SKIP_DOTS);
			return iterator_count($fi);
		}
		
		public function createImage()
		{
			$this->addCharacter();
			$this->addOverlay();
			$this->addCadre();
			$this->addName();
			$this->addDescription();
		}
		
		public function addCadre()
		{
			$cadre = imagecreatefrompng('imageBase/cadre.png');
			
			$largeur_source = imagesx($cadre);
			$hauteur_source = imagesy($cadre);
			$largeur_destination = imagesx($this->image);
			$hauteur_destination = imagesy($this->image);
			
			imagecopyresampled($this->image, $cadre, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);
		}
		
		public function addOverlay()
		{
			$overlay = imagecreatefrompng('imageBase/overlay.png');
			
			$char_w = imagesx($overlay);
			$char_h = imagesy($overlay);
			
			$back_w = imagesx($this->image);
			$back_h = imagesy($this->image);
			
			imagecopyresampled(
					$this->image,
					$overlay,
					0,
					0,
					0,
					0,
					$back_w,
					$back_h,
					$char_w,
					$char_h
					);
		}
		
		public function addCharacter()
		{
			$randomCharacter = rand(1,$this->countFileInFolder('imageBase/characters/'.$this->character)).'.png';
			$character = imagecreatefrompng('imageBase/characters/'.$this->character.'/'.$randomCharacter);
			
			$char_w = imagesx($character);
			$char_h = imagesy($character);
			
			$back_w = imagesx($this->image);
			$back_h = imagesy($this->image);
					
			imagecopyresampled(
					$this->image, 
					$character,
					0,
					0,
					0,
					0,
					$back_w, 
					$back_h, 
					$char_w, 
					$char_h
			); 
		}
		
		public function addName()
		{
			$font = $this->randomFontFromGenre();
			
			$now = DateTime::createFromFormat('U.u', microtime(true));
			$fontName = $now->format("YmdHisu").'.ttf';
			
			file_put_contents($fontName, $font);
			
			$fontSize = 80;
			
			$bbox = imagettfbbox($fontSize, 0, $fontName, $this->name);
			$center1 = (imagesx($this->image) / 2) - (($bbox[2] - $bbox[0]) / 2);
			
			imagettftext($this->image, $fontSize, 0, $center1, 6*($this->logoHigh), $this->color, $fontName, $this->name);
		}
		
		protected function randomFontFromGenre(){
			$randomFont = rand(1,$this->countFileInFolder('imageBase/fonts/'.$this->genre)).'.ttf';
			return file_get_contents('imageBase/fonts/'.$this->genre.'/'.$randomFont);
		}
		
		
		public function addDescription()
		{
			$font = file_get_contents("../assets/fonts/CanalLightRomain.ttf");
			file_put_contents("canal.ttf", $font);
			
			$fontSize = 35;
			$descriptionLines = explode('<br>', $this->description);
			foreach ($descriptionLines as $index => $descriptionLine){
				$description = mb_strtoupper($descriptionLine, 'UTF-8');
				
				$bbox = imagettfbbox($fontSize, 0, 'canal.ttf', $description);
				$center1 = (imagesx($this->image) / 2) - (($bbox[2] - $bbox[0]) / 2);
				
				imagettftext($this->image, $fontSize, 0, $center1, (8+$index)*($this->logoHigh), $this->color, 'canal.ttf', $description);
			}
			
		}
		
		public function getImage()
		{
			return $this->image;
		}
		
		public function createPNG()
		{
			$now = DateTime::createFromFormat('U.u', microtime(true));
			$file = './userImages/'.$now->format("YmdHisu").'.png';
			imagepng($this->getImage(), $file);
			$this->pngName = $file;
		}
		
		public function getPNG()
		{
			return $this->pngName;
		}
	}
?>