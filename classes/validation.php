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

    public function validate($field_name, $rules) {
        $all_rules  = explode('|', $rules);
        $value      = $this->input($field_name);

        if(in_array("required", $all_rules)) {
            if(empty($value)) {
                $this->errors[$field_name] = $field_name . " is required.";
            }
        }
    }
}

?>