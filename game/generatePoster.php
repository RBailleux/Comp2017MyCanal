<?php
	class generatePoster{
		public $category;
		public $background;
		public $genre;
		public $name;
		public $color;
		public $description;
		public $image;
		public $logoHigh = 74;
		public $pngName;
		
		public function __construct($category, $background, $genre, $name, $color, $description)
		{
			$this->category = $category;
			$this->background = $background;
			$this->genre = $genre;
			$this->name = $name;
			$this->description = $description;
			$this->image = imagecreatefromjpeg('imageBase/backgrounds/'.$this->background);
			$this->color = imagecolorallocate($this->image, 255, 255, 255);
			$this->createImage();
		}
		
		public function createImage()
		{
			$this->addCharacter();
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
			
			
// 			$this->logoHigh = $hauteur_source;
			imagecopyresampled($this->image, $cadre, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);
			//imagecopymerge($this->image, $logoCanal, $hauteur_source, $destination_y, 0, 0, $largeur_source, $hauteur_source, 100);
		}
		
		public function addCharacter()
		{
			$character = imagecreatefrompng('imageBase/characters/bean_resize_2.png');
			
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
			
			//imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
		}
		
		public function addName()
		{
			$font = file_get_contents("https://github.com/google/fonts/raw/master/apache/droidserif/DroidSerif.ttf");
			file_put_contents("font.ttf", $font);
			
			$fontSize = 55;
			
			$bbox = imagettfbbox($fontSize, 0, 'font.ttf', $this->name);
			$center1 = (imagesx($this->image) / 2) - (($bbox[2] - $bbox[0]) / 2);
			
			imagettftext($this->image, $fontSize, 0, $center1, 2*($this->logoHigh), $this->color, 'font.ttf', $this->name);
		}
		
		public function addDescription()
		{
			$font = file_get_contents("../assets/fonts/CanalLightRomain.ttf");
			file_put_contents("canal.ttf", $font);
			
			$fontSize = 35;
			
			$bbox = imagettfbbox($fontSize, 0, 'canal.ttf', strtoupper($this->description));
			$center1 = (imagesx($this->image) / 2) - (($bbox[2] - $bbox[0]) / 2);
			
			imagettftext($this->image, $fontSize, 0, $center1, 6*($this->logoHigh), $this->color, 'canal.ttf', strtoupper($this->description));
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