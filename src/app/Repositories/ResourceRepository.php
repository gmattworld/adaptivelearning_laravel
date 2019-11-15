<?php

namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\IResourceRepository;
use App\entity\resource;

class ResourceRepository extends BaseRepository implements IResourceRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Resource $resource)
    {
        $this->model = $resource;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveResource(string $name, string $code, string $description, int $subject_id, string $pdf_path, string $audio_path, string $video_path, bool $status)
    {
        return $this->save([
            'name' => $name,
            'code' => $code,
            'description' => $description,
            'subject_id' => $subject_id,
            'pdf_path' => $pdf_path,
            'audio_path' => $audio_path,
            'video_path' => $video_path,
            'is_active' => $status
        ]);
    }

    public function UpdateResource(string $name, string $description, int $subject_id, string $pdf_path, string $audio_path, string $video_path, int $id) {
        $data = [
            'name' => $name,
            'description' => $description,
            'subject_id' => $subject_id,
            'pdf_path' => $pdf_path,
            'audio_path' => $audio_path,
            'video_path' => $video_path
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
