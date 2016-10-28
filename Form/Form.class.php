<?php

class Form {
	private $method = 'post';
	private $action = '';
	private $encType = '';
	private $tagAttributes = [];
	private $fieldconf = [];
	private $fields =[];

	public function __construct(array $config) {

		// $this->method = $config['method'] ?? 'post';
		// $this->action = $config['action'] ?? '';
		// $this->encType = $config['encType'] ?? '';
		// $this->tagAttributes = $config['tagAttributes'] ?? 'post';

		foreach($config["form"] as $field => $key) {
			// echo $field;
			$this->$field = $key ?? $this->$field;
		}
			$this->fieldconf = $config["fields"];

		// Formfelder erzeugen
		$this->createFormFields();	
	}

	private function createFormFields() {
		foreach($this->fieldconf as $key => $value) {
			// var_dump($this->fields[$key]);
			$this->fields[$key] = new FormField($key, $value);
		}
		// var_dump($this->fields);
	} 	

	public function render () : string {
		$formTxt = $this->open();
		// var_dump($this->fields);
		foreach($this->fieldconf as $key => $value) {
			// var_dump($this->fields[$key]);
			$$key = new FormField($key, $this->fieldconf[$key]);
			// var_dump($$key);
			$formTxt .= $$key->render();
		}
		$formTxt .= $this->close();
		return $formTxt;
	}

	public function open () : string {
		$formOpen = '<form ';
		$formOpen .= 'method="'.$this->method.'" ';
		$formOpen .= 'action="'.$this->action.'" ';
		if ($this->encType != '') {
			$formOpen .= 'encType="'.$this->encType.'" ';
		}
		$formOpen .= $this->getTagAttributes();
		$formOpen .= '>';
		return $formOpen;
	}

	public function close () : string {
		return '</form>';
	}

	/**
	* Setzte aus den Attributes eine String zusammen.
	* @return string
	*/
	private function getTagAttributes() : string {
			$tagTxt = '';
		foreach ($this->tagAttributes as $key => $value) {
			if ($value != '') {
				$tagTxt .= $key.'="'.$value.'" ';
			}
		}
		return $tagTxt;
	}
}