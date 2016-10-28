<?php
class Checkbox extends FormFields
{
    public function __construct($name, array $conf)
    {
        parent::__construct($name, $conf);
    }
    public function renderField() : string
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
    public function render() : string
    {
        return
        $this->renderField().
        $this->renderLabel().
        $this->renderError().
        '';
    }
}
