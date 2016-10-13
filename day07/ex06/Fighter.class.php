<?php

abstract Class fighter{
	function __construct($name){
		$this->name = $name;
	}
	abstract public function fight($fighter);

}