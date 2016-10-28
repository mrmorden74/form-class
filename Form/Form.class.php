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
			$this->$field = $key ?? $this->$field;
		}
			$this->fieldconf = $config["fields"];
		// Formfelder erzeugen
		$this->createFormFields();	
	}

	private function createFormFields() {
		foreach($this->fieldconf as $key => $value) {
			switch($value['type']) {
				case 'textarea':
					$this->fields[$key] = new Textarea($key, $value);
					break;
				case 'checkbox':
					$this->fields[$key] = new Checkbox($key, $value);
					break;
				case 'radio':
					$this->fields[$key] = new Radiobuttons($key, $value);
					break;
				case 'selectbox':
					break;
				default:
					$this->fields[$key] = new FormFields($key, $value);
			}
		}
		// var_dump($this->fields);
	} 	

	public function render () : string {
		$formTxt = $this->open();
		$formTxt .= $this->renderAllFields();
		$formTxt .= $this->close();
		return $formTxt;
	}

	private function renderAllFields() : string {
		$allFields = '';
		foreach($this->fields as $field) {
			$allFields .= $field->render();
		}
		return $allFields;
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

	public function getField(string $name) : FormField {
		return $this->fields[$name];
	}
}