<?php

namespace App\Repositories;


use App\Efiling;
use App\Repositories\Interfaces\IEfilingRepository;

class EfilingRepository extends BaseRepository implements IEfilingRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Efiling $post)
    {
        $this->model = $post;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveEfiling(string $name, string $description, string $filepath, int $category_id, int $user_id)
    {
        return $this->Save([
            'name' => $name,
            'category_id' => $category_id,
            'description' => $description,
            'filepath' => $filepath,
            'user_id' => $user_id
        ]);
    }

    public function UpdateEfiling(string $name, string $description, string $filepath, int $category_id, int $user_id, int $id) {
        $data = [
            'name' => $name,
            'category_id' => $category_id,
            'description' => $description,
            'filepath' => $filepath,
            'user_id' => $user_id
        ];

        return $this->update($data, $id);
    }

    public function CheckEfilingExist(string $name, int $category_id, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['name', '=', $name], ['category_id', '=', $category_id], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where([['name', '=', $name], ['category_id', '=', $category_id]])->exists();
        }
    }

    public function TopEfiling(int $count){
        return $this->model->where('is_active', true)->orderBy('views', 'desc')->take($count)->get();
    }

    public function LatestEfiling(int $count){
        return $this->model->where('is_active', true)->orderBy('created_at', 'desc')->take($count)->get();
    }

    public function GetAllPaginated(int $count){
        return $this->model->where('is_active', true)->orderBy('created_at', 'desc')->paginate($count);
    }
}
