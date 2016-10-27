<?php

class Form {
	private $method;
	private $action;
	private $encType;
	private $tagAttributes;

	public function __construct($config) {

		// $this->method = $config['method'] ?? 'post';
		// $this->action = $config['action'] ?? '';
		// $this->encType = $config['encType'] ?? '';
		// $this->tagAttributes = $config['tagAttributes'] ?? 'post';

		foreach($config as $field => $key) {
			echo $field;
			$this->$field = $key;
		}
	}

	public function render () {
		$formtxt = '<form ';

	}

	public function open () {

	}

	public function close () {

	}

	/**
	* Setzte aus den Attributes eine String zusammen.
	* @return string
	*/
	private function getTagAttributes() : string {


	}
}