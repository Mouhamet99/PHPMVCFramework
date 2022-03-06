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
    }
}