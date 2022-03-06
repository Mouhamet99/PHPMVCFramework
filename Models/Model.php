<?php

namespace App\Models;

abstract class Model
{
    const RULE_REQUIRED = 'required';
    const RULE_EMAIL = 'email';
    const RULE_MIN = 'min';
    const RULE_MAX = 'max';
    const RULE_MATCH = 'match';
    public array $errors = [];

    public function loadData($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    /**
     * @return mixed
     */
    abstract public function rules();

    public function validate(): bool
    {
        foreach ($this->rules() as $attribute => $rules) {
            $value = $this->{$attribute};
            foreach ($rules as $rule) {
                $ruleName = $rule;
                if (is_array($rule)) {
                    $ruleName = $rule[0];
                }
                if ($ruleName === self::RULE_REQUIRED && $value === '') {
                    $this->addError($attribute, self::RULE_REQUIRED);
                }
            }
        }

        return empty($this->errors);
    }

    public function addError(string $attribute, string $rule)
    {
        $message = $this->errorMessages()[$rule] ?? '';
        $this->errors[$attribute][] = $message;
    }

    public function errorMessages(): array
    {
        return [
            self::RULE_REQUIRED => "This field must be required",
            self::RULE_EMAIL => "This field must be an address mail",
            self::RULE_MIN => "The Min Length of this field is {min}",
            self::RULE_MAX => "The Max Length of this field is {max}",
            self::RULE_MATCH => "This field must be the same as {match}",
        ];
    }
}