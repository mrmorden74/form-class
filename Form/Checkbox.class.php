<?php
class Checkbox extends FormField
{
    public function __construct($name, array $conf)
    {
        parent::__construct($name, $conf);
    }
    public function renderField()
    {
        $txtField = "<input type='{$this->type}' name='{$this->name}'";
        $txtField .= " id='{$this->id}'";
        $txtField .= 'value="'.$this->value.'"';
        $txtField .= $this->getTagAttributes();
        $txtField .= $this->required ? ' required' : '';
        $txtField .= ">";
        // $txtField .= $this->label;
        return $txtField;
    }
	public function render() {
	return 
		$this->renderField().
		$this->renderLabel().
		$this->renderError().
		'';
	}
}
