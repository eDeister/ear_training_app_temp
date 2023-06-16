<?php

// validation.php

class Validation
{
    public static function validatePlayerData($name, $age, $instrument)
    {
        $errors = [];

        // Perform validation checks
        if (empty($name)) {
            $errors['name'] = 'Name is required.';
        }

        if (empty($age)) {
            $errors['age'] = 'Age is required.';
        } elseif (!is_numeric($age)) {
            $errors['age'] = 'Age must be a numeric value.';
        }

        if (empty($instrument)) {
            $errors['instrument'] = 'Instrument is required.';
        }

        // Return validation errors
        return $errors;
    }
}
