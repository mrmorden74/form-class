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
	public function __construct(array $conf) {

	}

	public function render() {
		return $this->renderLabel() .
			$this->renderField() .
			$this->renderError();
	}

	public function renderLabel() {
		
	}
	public function renderField() {

	}
	public function renderError() {

	}
}
?>