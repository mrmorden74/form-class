<?php
/**
* Basis Klasse für alle Formularfelder
* Bildet alle input types außer Radio/Checkbox ab
*/
class FormField {
	protected $name;
	protected $id;
	protected $label;
	protected $type;
	protected $value;
	protected $tagAttributes;

	/**
	*	Konstruktor, initialisiert das Feld
	*	@param array $conf
	*/
	public function __construct($name, array $conf) {
		foreach($conf as $field => $key) {
			// echo $field,'<br>';
			$this->$field = $key;
		}
		$this->name = $name;

	}

	public function render() {
		return $this->renderLabel() .
			$this->renderField() .
			$this->renderError();
	}

	public function renderLabel() {
		return "<label for='{$this->id}' name='{$this->name}'>{$this->label}</label>";
		
	}
	public function renderField() {
		return  "<input type='{$this->type}' name='{$this->name}' id='{$this->id}'". $this->getTagAttributes().">";

	}
	public function renderError() {
		return "";
	}
	/**
	* Setzte aus den Attributes eine String zusammen.
	* @return string
	*/
	private function getTagAttributes() : string {
		$tagTxt = '';
		if (isset($this->tagAttributes)) {
			foreach ($this->tagAttributes as $key => $value) {
				if ($value != '') {
					$tagTxt .= $key.'="'.$value.'" ';
				}
			}
		}
		return $tagTxt;
	}
}
?>