<?php

namespace App\Repositories;

use App\Repositories\Interfaces\IDepartmentRepository;
use App\entity\Department;

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

    public function SaveDepartment(string $name, string $code, string $description, int $school_id, bool $status)
    {
        return $this->save([
            'name' => $name,
            'code' => $code,
            'description' => $description,
            'school_id' => $school_id,
            'is_active' => $status
        ]);
    }

    public function UpdateDepartment(string $name, string $code, string $description, int $school_id, int $id) {
        $data = [
            'name' => $name,
            'code' => $code,
            'description' => $description,
            'school_id' => $school_id
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
