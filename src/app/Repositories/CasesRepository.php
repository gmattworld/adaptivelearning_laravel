<?php

namespace App\Repositories;


use App\Cases;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interfaces\ICasesRepository;

class CasesRepository extends BaseRepository implements ICasesRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Cases $case)
    {
        $this->model = $case;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveCases(string $name, string $brief, string $details, string $cover_img, int $judge_id, int $category_id, int $user_id, string $status)
    {
        return $this->Save([
            'cover_img' => $cover_img,
            'name' => $name,
            'details' => $details,
            'brief' => $brief,
            'user_id' => $user_id,
            'judge_id' => $judge_id,
            'category_id' => $category_id,
            'status' => $status
        ]);
    }

    public function UpdateCases(string $name, string $brief, string $details, string $cover_img, int $judge_id, int $category_id, int $user_id, string $status, int $id) {
        $data = [
            'cover_img' => $cover_img,
            'name' => $name,
            'details' => $details,
            'brief' => $brief,
            'user_id' => $user_id,
            'judge_id' => $judge_id,
            'category_id' => $category_id,
            'status' => $status
        ];

        return $this->update($data, $id);
    }

    public function GetAllPaginated(int $count){
        return $this->model->orderBy('created_at', 'desc')->paginate($count);
    }

    public function GetAllPending(){
        return $this->model->where([['status', '=', 'Pending']])->get();
    }

    public function GetAllOngoing(){
        return $this->model->where([['status', '=', 'Ongoing']])->get();
    }

    public function GetAllUncompleted(){
        return $this->model->where([['status', '<>', 'Concluded']])->get();
    }
}
