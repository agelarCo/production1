<?php
class Core {
	public $name;
	public function setName($name='Core'){
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
}

?>