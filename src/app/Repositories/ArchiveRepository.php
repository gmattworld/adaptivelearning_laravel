<?php

namespace App\Repositories;


use App\Archive;
use App\Repositories\Interfaces\IArchiveRepository;

class ArchiveRepository extends BaseRepository implements IArchiveRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Archive $post)
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

    public function SaveArchive(string $name, string $description, string $filepath, int $case_id, int $user_id, int $casetype_id)
    {
        return $this->Save([
            'name' => $name,
            'case_id' => $case_id,
            'case_type_id' => $casetype_id,
            'description' => $description,
            'filepath' => $filepath,
            'user_id' => $user_id
        ]);
    }

    public function UpdateArchive(string $name, string $description, string $filepath, int $case_id, int $user_id, int $casetype_id, int $id) {
        $data = [
            'name' => $name,
            'case_id' => $case_id,
            'case_type_id' => $casetype_id,
            'description' => $description,
            'filepath' => $filepath,
            'user_id' => $user_id
        ];

        return $this->update($data, $id);
    }

    public function CheckArchiveExist(string $name, int $case_id, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['name', '=', $name], ['case_id', '=', $case_id], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where([['name', '=', $name], ['case_id', '=', $case_id]])->exists();
        }
    }

    public function TopArchive(int $count){
        return $this->model->where('is_active', true)->orderBy('views', 'desc')->take($count)->get();
    }

    public function LatestArchive(int $count){
        return $this->model->where('is_active', true)->orderBy('created_at', 'desc')->take($count)->get();
    }

    public function GetAllPaginated(int $count){
        return $this->model->where('is_active', true)->orderBy('created_at', 'desc')->paginate($count);
    }
}
