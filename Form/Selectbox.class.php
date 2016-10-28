<?php
class Selectbox extends FormFields
{    
    public function __construct($name, array $conf)
    {
        parent::__construct($name, $conf);
        // 
        $this->selectList = $conf['selectList'] ?? [];
    }

    public function render() : string
    {
        return $this->renderLabel().
            $this->renderField();
    }

    public function renderField() : string
    {
        $select = '<select name="' . $this->name .'">';
            // ' size="' . $this->size .'">';
        foreach ($this->selectList as $value) {
            $autofocus = '';
            if (isset($value['autofocus']) && $value['autofocus'] === true) {
                $autofocus = ' autofocus';
            }
            $select .= '<option value="' . $value['value'] .'"'.
                 $autofocus .'> ' . $value['label'] . '</option>';
        }
        $select .= '</select>';
        return $select;
    }
    
}
