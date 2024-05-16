<?php
namespace App\Services;

use App\Repositories\interface\AuthRepository;
use App\Services\interface\AuthServiceInterface;
use Exception;
use Illuminate\Support\Facades\Hash;

class AuthService implements AuthServiceInterface
{


    protected $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function register(array $data)
    {
        try
        {
            $dataCreate = [
                'email' => $data["email"],
                'password' => Hash::make($data['password']),
                'country' => $data['country'],
                'user_name' => $data['user_name'],
                'company_name' => $data['company_name'],
                'phone' => $data['phone'],
                'operator' => $data['operator'],
                'referral_code' => $data['referral_code']
            ];
            $this->authRepository->register($dataCreate);
            return true;
        }catch(Exception $e)
        {
            return false;
        }
    }
}
