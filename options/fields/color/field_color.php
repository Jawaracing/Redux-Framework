<?php

// temp edit by Themeic - https://github.com/Themeic

class Redux_Options_color {

    /**
     * Field Constructor.
     *
     * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
     *
     * @since Redux_Options 1.0.0
    */
    function __construct($field = array(), $value ='', $parent) {
        $this->field = $field;
		$this->value = $value;
		$this->args = $parent->args;
    }

    /**
     * Field Render Function.
     *
     * Takes the vars and outputs the HTML for the field in the settings
     *
     * @since Redux_Options 1.0.0
    */
    function render() {
        $class = (isset($this->field['class'])) ? $this->field['class'] : '';
	
            echo '<div class="themeic-color color ' . $class . '" data-color="' . $this->value . '" data-color-format="rgba">
			<span class="add-on"><i style="background-color: ' . $this->value . '"></i></span><br>
			<input type="text" id="' . $this->field['id'] . '" name="' . $this->args['opt_name'] . '[' . $this->field['id'] . ']" value="' . $this->value . '" class="' . $class . '" /></div>';
            echo (isset($this->field['desc']) && !empty($this->field['desc'])) ? ' <span class="description">' . $this->field['desc'] . '</span>' : '';
       
    }
}
