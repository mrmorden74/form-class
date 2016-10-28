<?php
class RadioButtons extends FormFields {
    
    public function __construct($name, array $conf)
    {
        parent::__construct($name, $conf);
        // 
        $this->radioButtons = $conf['radioButtons'] ?? [];
    }

    public function render() : string
    {
        return $this->renderField();
    }

    public function renderField() : string
    {
        $radios = '';
        
        foreach ($this->radioButtons as $value) {
            $checked = '';
            if (isset($value['checked']) && $value['checked'] === true) {
                $checked = ' checked';
            }
            $radios .= '<fieldset class="fieldset"><input type="radio" name="' . $this->name .'"'.
                 ' id = "' . $value['id'] .'"'.
                 $checked .
                 ' value = "' . $value['value'] . '"> ';
            $radios .= ' <label for="' . $value['id'] . '">' .
                $value ['label'] . '</label></fieldset>';
        }
        return $radios;
    }
    
}
