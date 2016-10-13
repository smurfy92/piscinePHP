<?php

Class Color {

	public $red = 0;
	public $green = 0;
	public $blue = 0;
	static $verbose = False;

	function getRed(){return ($this->red);}
	function getGreen(){return ($this->green);}
	function getBlue(){return ($this->blue);}

	function setBlue($val){
		if (intval($val) > 255)
			$this->blue = 255;
		else if (intval($val) < 0)
			$this->blue = 0;
		else
			$this->blue = intval($val);
	}

	function setGreen($val){
		if (intval($val) > 255)
			$this->green = 255;
		else if (intval($val) < 0)
			$this->green = 0;
		else
			$this->green = intval($val);
	}

	function setRed($val){
		if (intval($val) > 255)
			$this->red = 255;
		else if (intval($val) < 0)
			$this->red = 0;
		else
			$this->red = intval($val);
	}

	static function doc(){
		$read = fopen("Color.doc.txt", 'r');
		echo "\n";
		while ($read && !feof($read))
			echo fgets($read);
		echo "\n";
	}

	function __construct(array $kwargs)
	{
		if ($kwargs["red"])
			$this->setRed($kwargs["red"]);
		if ($kwargs["green"])
			$this->setGreen($kwargs["green"]);
		if ($kwargs["blue"])
			$this->setBlue($kwargs["blue"]);
		if ($kwargs["rgb"])
		{
			$mask = 255;
			$this->red = $kwargs['rgb'] & $mask;
			$this->green = ($kwargs['rgb'] >> 8 ) & $mask;
			$this->blue = ($kwargs['rgb'] >> 16) & $mask;
		}
		if (Self::$verbose)
			printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
		return ;
	}

	function __destruct()
	{
		if (Self::$verbose)
			printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
	}

	function __toString(){
		return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
	}

	function add($color)
	{
		$result = new Color(array(
				"red" => $this->red + $color->red,
				"green" => $this->green + $color->green,
				"blue" => $this->blue + $color->blue
			));
		return ($result);
	}

	function sub($color)
	{
		$result = new Color(array(
				"red" => $this->red - $color->red,
				"green" => $this->green - $color->green,
				"blue" => $this->blue - $color->blue
			));
		return $result;
	}

	function mult($val)
	{
		$result = new Color(array(
				"red" => $this->red * $val,
				"green" => $this->green * $val,
				"blue" => $this->blue * $val
			));
		return $result;
	}
}
 ?>