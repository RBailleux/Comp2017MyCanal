<?php
	class generatePoster{
		public $category;
		public $background;
		public $genre;
		public $name;
		public $color;
		public $description;
		public $image;
		
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
			$this->addLogo();
			$this->addName();
		}
		
		public function addLogo()
		{
			$logoCanal = imagecreatefrompng('imageBase/logoCanal.png');
			
			$largeur_source = imagesx($logoCanal);
			$hauteur_source = imagesy($logoCanal);
			$hauteur_destination = imagesy($this->image);
			
			$destination_y =  $hauteur_destination - $hauteur_source;
			
			imagecopymerge($this->image, $logoCanal, 0, $destination_y, 0, 0, $largeur_source, $hauteur_source, 60);
		}
		
		public function addName()
		{
			$font = file_get_contents("https://github.com/google/fonts/raw/master/apache/rancho/Rancho-Regular.ttf");
			file_put_contents("font.ttf", $font);
			imagettftext($this->image, 20, 0, 11, 21, $this->color, 'font.ttf', $this->name);
		}
		
		public function getImage()
		{
			return $this->image;
		}
	}
?>