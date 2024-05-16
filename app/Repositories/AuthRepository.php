<?php
namespace App\Repositories;

use App\Models\UserRegister;
use App\Repositories\interface\AuthRepository as InterfaceAuthRepository;
use Exception;

class AuthRepository implements InterfaceAuthRepository
{
    public function register(array $data)
    {
        return UserRegister::insert([
            'email' => $data["email"],
            'password' => $data['password'],
            'country' => $data['country'],
            'user_name' => $data['user_name'],
            'company_name' => $data['company_name'],
            'phone' => $data['phone'],
            'company_name_en' => $data['company_name'],
            'company_name_jp' => $data['company_name'],
            'operator' => $data['operator'],
            'referral_code' => $data['referral_code']
        ]);
    }
}
