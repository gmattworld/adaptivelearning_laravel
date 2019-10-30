<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\IUserRoleRepository;
use App\UserRole;

class UserRoleRepository extends BaseRepository implements IUserRoleRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(UserRole $userRole)
    {
        $this->model = $userRole;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveUserRole(string $lastName, string $otherNames, string $userName, string $email, string $phone, string $userType, string $fileName)
    {
        return $this->create([
            'LastName' => $lastName,
            'OtherNames' => $otherNames,
            'username' => $userName,
            'email' => $email,
            'Phone' => $phone,
            'UserType' => $userType,
            'name' => $lastName .' '. $otherNames,
            'password' => bcrypt('password'),
            'IsActive' => true,
            'DisplayPics' => $fileName
        ]);
    }

    public function UpdateUserRole(string $lastName, string $otherNames, string $userName, string $email, string $phone, bool $newFile, string  $fileName, int $id) {
        $data = [
            'LastName' => $lastName,
            'OtherNames' => $otherNames,
            'username' => $userName,
            'email' => $email,
            'Phone' => $phone,
            'name' => $lastName .' '. $otherNames,
            'IsActive' => true,
        ];

        if ($newFile) {
            $data = [
                'LastName' => $lastName,
                'OtherNames' => $otherNames,
                'username' => $userName,
                'email' => $email,
                'Phone' => $phone,
                'name' => $lastName .' '. $otherNames,
                'IsActive' => true,
                'DisplayPics' => $fileName
            ];
        }

        return $this->update($data, $id);
    }

    public function CheckUserRoleExist(string $email, int $exclussion)
    {
        $user = false;
        if($exclussion > 0){
            $users = $this->model->where([['email', '=', $email], ['id', '<>', $exclussion]])->exists();
        }else{
            $users = $this->model->where('email', $email)->exists();
        }

        if ($users) {
            return true;
        } else {
            return false;
        }
    }
}
