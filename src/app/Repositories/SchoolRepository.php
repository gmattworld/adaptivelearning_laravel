<?php

namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\ISchoolRepository;
use App\entity\school;

class SchoolRepository extends BaseRepository implements ISchoolRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(School $school)
    {
        $this->model = $school;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveSchool(string $name, string $code, string $description, bool $status)
    {
        return $this->save([
            'name' => $name,
            'code' => $code,
            'description' => $description,
            'is_active' => $status
        ]);
    }

    public function UpdateSchool(string $name, string $code, string $description, int $id) {
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
