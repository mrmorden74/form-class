<?php
/**
* Basis Klasse für alle Formularfelder
* Bildet alle input types außer Radio/Checkbox ab
*/
class FormFields
{
    protected $name = '';
    protected $id = '';
    protected $label = '';
    protected $type = '';
    protected $value = '';
    protected $required = false;
	protected $radioButtons = [];
    protected $tagAttributes = [];

    /**
    *    Konstruktor, initialisiert das Feld
    *    @param array $conf
    */
    public function __construct($name, array $conf)
    {
        foreach ($conf as $field => $key) {
            // echo $field,'<br>';
            $this->$field = $key ?? $this->$field;
        }
        $this->name = $name;
    }

    public function render() : string
    {
        return
        $this->renderLabel().
        $this->renderError().
        $this->renderField().
        '';
    }

    public function renderLabel() : string
    {
        return "<label for='{$this->id}' name='{$this->name}'>{$this->label}</label>";
    }
    public function renderField() : string
    {
        $txtField = "<input type='{$this->type}' name='{$this->name}' id='{$this->id}'". $this->getTagAttributes();
        if ($this->required) {
            $txtField .= " required";
        }
        $txtField .= ">";
        return $txtField;
    }
    public function renderError() : string
    {
        // return "<span class='error'>Fehlermeldung!</span>";
		return '';
    }
    /**
    * Setzte aus den Attributes eine String zusammen.
    * @return string
    */
    protected function getTagAttributes() : string
    {
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
