<?php

namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\IUserTypeRepository;
use App\UserType;

class UserTypeRepository extends BaseRepository implements IUserTypeRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(UserType $userType)
    {
        $this->model = $userType;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveUserType(string $name, string $description, bool $status)
    {
        return $this->save([
            'name' => $name,
            'description' => $description,
            'is_active' => $status
        ]);
    }

    public function UpdateUserType(string $name, string $description, int $id) {
        $data = [
            'name' => $name,
            'description' => $description
        ];

        return $this->update($data, $id);
    }

    public function CheckUserTypeExist(string $name, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['name', '=', $name], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where('name', $name)->exists();
        }
    }
}
