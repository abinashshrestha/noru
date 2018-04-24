<?php

class NewGeneralSetting
{
    function __construct($arguments)
    {
        $this->field = $arguments;
        add_filter('admin_init', array(&$this, 'register_fields'));
    }

    function register_fields()
    {
        register_setting('general', $this->field['machine_name'], 'esc_attr');
        add_settings_field($this->field['machine_name_field'], '<label for="' . $this->field['machine_name'] . '">' . __($this->field['name'], $this->field['machine_name']
            ) . '</label>', array(&$this, 'fields_html'), 'general');
    }

    function fields_html()
    {
      if($this->field['type']=='textarea'){
          $value = get_option($this->field['machine_name'], '');
          echo '<textarea rows="5" cols="50"  id="' . $this->field['id'] . '" name="' . $this->field['machine_name'] . '" >' . $value . '</textarea>';
      }else{
        $value = get_option($this->field['machine_name'], '');
        echo '<input type="' . $this->field['type'] . '" id="' . $this->field['id'] . '" name="' . $this->field['machine_name'] . '" value="' . $value . '"/>';
      }
    }

}

?>
