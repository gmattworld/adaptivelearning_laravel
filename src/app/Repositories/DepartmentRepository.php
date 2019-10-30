<?php

namespace App\Repositories;

use App\Repositories\Interfaces\IDepartmentRepository;
use App\Department;

class DepartmentRepository extends BaseRepository implements IDepartmentRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Department $department)
    {
        $this->model = $department;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveDepartment(string $name, string $code, string $description, bool $status)
    {
        return $this->save([
            'name' => $name,
            'code' => $code,
            'description' => $description,
            'is_active' => $status
        ]);
    }

    public function UpdateDepartment(string $name, string $code, string $description, int $id) {
        $data = [
            'name' => $name,
            'code' => $code,
            'description' => $description
        ];

        return $this->update($data, $id);
    }

    public function CheckNameExist(string $name, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['name', '=', $name], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where('name', $name)->exists();
        }
    }

    public function CheckCodeExist(string $code, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['code', '=', $code], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where('code', $code)->exists();
        }
    }
}
