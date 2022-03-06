<?php

namespace App\Models;

class RegisterModel extends Model
{
    public string $full_name;
    public string $email;
    public string $profession;
    public string $gender;
    public string $password;
    public string $confirm_password;

    public function register()
    {
        echo "New User Created Successfully";
        return 'Success';
    }

    public function rules()
    {
        // TODO: Implement rules() method.
        return [
            'full_name' => [self::RULE_REQUIRED],
            'profession' => [self::RULE_REQUIRED],
            'gender' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 20]],
            'confirm_password' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }
}