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
			// echo $field;
			$this->$field = $key;
		}
	}

	public function render () : string {
		$formTxt = $this->open();
		$formTxt .= '<label for="feld1" name="feld1t">Feld 1</label>';
		$formTxt .= '<input type="text" name="test" id="feld1" >';
		$formTxt .= '<button type="button" id="submit">Senden</button>';
		
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