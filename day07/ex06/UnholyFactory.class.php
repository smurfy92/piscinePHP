<?php

Class UnholyFactory {

	function __construct(){
		$this->array = [];
	}

	function fabricate($fightername){
		if (array_key_exists($fightername, $this->array))
		{
			print ("(Factory fabricates a fighter of type ".$fightername.")\n");
			return ($this->array[$fightername]);
		}
		else
			print("(Factory hasn't fabricate any fighter of type ".$fighter.")\n");
	}

	function absorb($fighter){
		if ($fighter instanceof Fighter)
		{
			if (array_key_exists($fighter->name, $this->array))
				print ("(Factory already absorbed a fighter of type ".$fighter->name.")\n");
			else
			{
				print("(Factory absorbed a fighter of type ".$fighter->name.")\n");
				$this->array[$fighter->name] = $fighter;
			}
		}
		else
			print("(Factory cant absorb this, it's not a fighter)\n");

	}
}