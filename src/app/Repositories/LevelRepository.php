<?php

namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\ILevelRepository;
use App\entity\level;

class LevelRepository extends BaseRepository implements ILevelRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Level $level)
    {
        $this->model = $level;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveLevel(string $name, string $code, string $description, int $department_id, bool $status)
    {
        return $this->save([
            'name' => $name,
            'code' => $code,
            'department_id' => $department_id,
            'description' => $description,
            'is_active' => $status
        ]);
    }

    public function UpdateLevel(string $name, string $code, string $description, int $department_id, int $id) {
        $data = [
            'name' => $name,
            'code' => $code,
            'department_id' => $department_id,
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
