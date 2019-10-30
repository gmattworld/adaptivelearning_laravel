<?php

namespace App\Repositories;


use App\User;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interfaces\IUserRepository;

class UserRepository extends BaseRepository implements IUserRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveUser(string $lastName, string $otherNames, string $username, string $email, string $phone, string $address, int $user_type_id, string $dp_image, bool $status)
    {
        return $this->Save([
            'lastname' => $lastName,
            'name' => $lastName .' '. $otherNames,
            'othernames' => $otherNames,
            'username' => $username,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'user_type_id' => $user_type_id,
            'dp_image' => $dp_image,
            'password' => Hash::make('password'),
            'is_logged_out' => $status
        ]);
    }

    public function UpdateUser(string $lastName, string $otherNames, string $username, string $email, string $phone, string $address, int $user_type_id, string $dp_image, bool $newFile, int $id) {
        $data = [
            'lastname' => $lastName,
            'name' => $lastName .' '. $otherNames,
            'othernames' => $otherNames,
            'username' => $username,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'user_type_id' => $user_type_id,
        ];

        if ($newFile) {
            $data = [
                'lastname' => $lastName,
                'name' => $lastName .' '. $otherNames,
                'othernames' => $otherNames,
                'username' => $username,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'user_type_id' => $user_type_id,
                'dp_image' => $dp_image,
            ];
        }

        return $this->update($data, $id);
    }

    public function ResetUserPwd(int $userID)
    {
        return $this->update(['password' => bcrypt('password')], $userID);
    }

    public function CheckUserNameExist(string $username, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['username', '=', $username], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where('username', $username)->exists();
        }
    }

    public function CheckPhoneExist(string $phone, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['phone', '=', $phone], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where('phone', $phone)->exists();
        }
    }

    public function CheckEmailExist(string $email, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['email', '=', $email], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where('email', $email)->exists();
        }
    }
}
