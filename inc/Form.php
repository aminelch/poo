<?php

/**
 * Simple Class to generate Bootstrap Form
 * @author : Amine L'ch
 * @version : 1.0
 */
class Form {

    /** Generate an input field
     * @param array $options
     * @return string
     */
    public static function input($options=[]) :string{
		
		$input="<input class=\"form-control\" "; 
		foreach ($options as $k => $v) {
			$input .= $k."=" . "\"$v\" " ; 
		}
		
		$input .= ">";
		return self::surround($input);

	}

    /** Generate a submit field
     * @param string $value
     * @return string
     */
    public static function submit($value="Envoyer"): string{
		return "<button type=\"submit\" class=\"btn-lg btn btn-primary\">$value</button>";
	}

    /**
     * Surround and Element by a html Div tag
     * @param $element
     * @return string
     */
    private static function surround($element){
		return "<div class=\"form-group\">
		" . $element ."
		</div>";
	}
}
