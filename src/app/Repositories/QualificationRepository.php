<?php

namespace App\Repositories;

use App\Repositories\Interfaces\IQualificationRepository;
use App\Qualification;

class QualificationRepository extends BaseRepository implements IQualificationRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Qualification $department)
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

    public function SaveQualification(string $name, string $title, string $description, bool $status)
    {
        return $this->save([
            'name' => $name,
            'title' => $title,
            'description' => $description,
            'is_active' => $status
        ]);
    }

    public function UpdateQualification(string $name, string $title, string $description, int $id) {
        $data = [
            'name' => $name,
            'title' => $title,
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

    public function CheckTitleExist(string $title, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['title', '=', $title], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where('title', $title)->exists();
        }
    }
}
