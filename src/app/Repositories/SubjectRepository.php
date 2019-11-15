<?php

namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\ISubjectRepository;
use App\entity\subject;

class SubjectRepository extends BaseRepository implements ISubjectRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Subject $subject)
    {
        $this->model = $subject;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveSubject(string $name, string $code, string $description, int $course_id, bool $status)
    {
        return $this->save([
            'name' => $name,
            'code' => $code,
            'course_id' => $course_id,
            'description' => $description,
            'is_active' => $status
        ]);
    }

    public function UpdateSubject(string $name, string $code, string $description, int $course_id, int $id) {
        $data = [
            'name' => $name,
            'code' => $code,
            'course_id' => $course_id,
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
