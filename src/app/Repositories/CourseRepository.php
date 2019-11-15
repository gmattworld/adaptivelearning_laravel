<?php

namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\ICourseRepository;
use App\entity\course;

class CourseRepository extends BaseRepository implements ICourseRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Course $course)
    {
        $this->model = $course;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveCourse(string $name, string $code, string $description, int $level_id, bool $status)
    {
        return $this->save([
            'name' => $name,
            'code' => $code,
            'level_id' => $level_id,
            'description' => $description,
            'is_active' => $status
        ]);
    }

    public function UpdateCourse(string $name, string $code, string $description, int $level_id, int $id) {
        $data = [
            'name' => $name,
            'code' => $code,
            'level_id' => $level_id,
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

    public function LatestPost(int $count){
        return $this->model->where('is_active', true)->orderBy('created_at', 'desc')->take($count)->get();
    }

    public function GetAllPaginated(int $count){
        return $this->model->where('is_active', true)->orderBy('created_at', 'desc')->paginate($count);
    }
}
