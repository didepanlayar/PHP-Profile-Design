<?php

error_reporting(0);

class validation {
    public $errors = [];

    public function input($field_name) {
        if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post") {
            return trim($_POST[$field_name]);
        } else if($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "get") {
            return trim($_GET[$field_name]);
        }
    }

    public function validate($field_name, $label, $rules) {
        $all_rules  = explode('|', $rules);
        $value      = $this->input($field_name);
        $pattern    = "/^[a-zA-Z ]+$/";

        /**
         * Required Rule
         */
        if(in_array("required", $all_rules)) {
            if(empty($value)) {
                $this->errors[$field_name] = $label . " is required.";
            }
        }
        
        /**
         * Alphabetical Rule
         */
        if(in_array("alphabetic", $all_rules)) {
            if(!preg_match($pattern, $value)) {
                $this->errors[$field_name] = $label . " must be alphabetical.";
            }
        }

        /**
         * Minimum Length Rule
         */
        if(in_array("min_len", $all_rules)) {
            $min_len_index           = array_search("min_len", $all_rules);
            $min_len_value_index     = $min_len_index + 1;
            $min_len_value           = $all_rules[$min_len_value_index];

            if(strlen($value) < $min_len_value) {
                return $this->errors[$field_name] = $label . " must be " . $min_len_value . "character.";
            }
        }
    }
}

?>