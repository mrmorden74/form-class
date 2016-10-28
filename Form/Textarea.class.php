<?php
class Textarea extends FormFields
{
    public function __construct($name, array $conf)
    {
        parent::__construct($name, $conf);
    }
    public function renderField() : string
    {
        $txtField = "<textarea name='{$this->name}'";
        $txtField .= " id='{$this->id}'";
        $txtField .= $this->getTagAttributes();
        $txtField .= $this->required ? ' required' : '';
        $txtField .= ">";
        $txtField .= $this->value;
        $txtField .= "</textarea>";
        return $txtField;
    }
}
