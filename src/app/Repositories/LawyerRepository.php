<?php

namespace App\Repositories;


use App\Lawyer;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interfaces\ILawyerRepository;
use App\User as AppUser;
use Illuminate\Foundation\Auth\User;

class LawyerRepository extends BaseRepository implements ILawyerRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Lawyer $lawyer)
    {
        $this->model = $lawyer;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveLawyer(string $dob, string $brief, string $gender, string $skills, string $website, string $facebook, string $twitter, string $linkedin, string $lastName, string $otherNames, string $username, string $email, string $phone, string $address, int $user_type_id, string $dp_image, bool $status)
    {
        $user = AppUser::create([
            'lastname' => $lastName,
            'name' => $lastName .' '. $otherNames,
            'othernames' => $otherNames,
            'username' => $username,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'user_type_id' => $user_type_id,
            'dp_image' => $dp_image,
            'password' => Hash::make('password'),
            'is_logged_out' => $status
        ]);

        $lawyer = new Lawyer();
        $lawyer->dob = $dob;
        $lawyer->brief = $brief;
        $lawyer->gender = $gender;
        $lawyer->skills = $skills;
        $lawyer->website = $website;
        $lawyer->facebook = $facebook;
        $lawyer->twitter = $twitter;
        $lawyer->linkedin = $linkedin;
        $lawyer->is_judge = false;
        $lawyer->name = $lastName .' '. $otherNames;
        $lawyer->can_advocate = false;

        return $user->lawyer()->save($lawyer);
    }

    public function UpdateLawyer(string $dob, string $brief, string $gender, string $skills, string $website, string $facebook, string $twitter, string $linkedin, string $lastName, string $otherNames, string $username, string $email, string $phone, string $address, int $user_type_id, string $dp_image, bool $newFile, int $id)
    {
        $lawyer = $this->GetByID($id);
        $lawyer->name = $lastName .' '. $otherNames;
        $lawyer->dob = $dob;
        $lawyer->brief = $brief;
        $lawyer->gender = $gender;
        $lawyer->skills = $skills;
        $lawyer->website = $website;
        $lawyer->facebook = $facebook;
        $lawyer->twitter = $twitter;
        $lawyer->linkedin = $linkedin;

        $lawyer->user->lastname = $lastName;
        $lawyer->user->name = $lastName .' '. $otherNames;
        $lawyer->user->othernames = $otherNames;
        $lawyer->user->username = $username;
        $lawyer->user->email = $email;
        $lawyer->user->phone = $phone;
        $lawyer->user->address = $address;
        $lawyer->user->user_type_id = $user_type_id;

        if ($newFile) {
            $lawyer->user->dp_image = $dp_image;
        }

        return $lawyer->push();
    }

    public function ResetLawyerPwd(int $userId)
    {
        return $this->update(['password' => bcrypt('password')], $userId);
    }

    public function CheckUserNameExist(string $username, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where(['id', '<>', $exclussion])->user()->where([['username', '=', $username]])->exists();
        }else{
            return $this->model->user()->where('username', $username)->exists();
        }
    }

    public function CheckPhoneExist(string $phone, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where(['id', '<>', $exclussion])->user()->where([['phone', '=', $phone]])->exists();
        }else{
            return $this->model->user()->where('phone', $phone)->exists();
        }
    }

    public function CheckEmailExist(string $email, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where(['id', '<>', $exclussion])->user()->where([['email', '=', $email]])->exists();
        }else{
            return $this->model->user()->where('email', $email)->exists();
        }
    }

    public function GetJudges()
    {
        return $this->model->where('is_judge', true)->get();
    }

    public function GetAndOrderJudges()
    {
        return $this->model->where('is_judge', true)->orderBy('name', 'asc')->get();
    }
}
