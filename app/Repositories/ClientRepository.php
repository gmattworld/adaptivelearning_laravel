<?php

namespace App\Repositories;


use App\entity\Client;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interfaces\IClientRepository;
use App\entity\User as AppUser;

class ClientRepository extends BaseRepository implements IClientRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Client $client)
    {
        $this->model = $client;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveClient(string $dob, string $brief, string $gender, string $skills, string $occupation, string $lastName, string $otherNames, string $username, string $email, string $phone, string $address, string $dp_image, bool $status)
    {
        $user = AppUser::create([
            'lastname' => $lastName,
            'name' => $lastName .' '. $otherNames,
            'othernames' => $otherNames,
            'username' => $username,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'user_type_id' => 0,
            'dp_image' => $dp_image,
            'password' => Hash::make('password'),
            'is_logged_out' => $status
        ]);

        $client = new Client();
        $client->dob = $dob;
        $client->brief = $brief;
        $client->gender = $gender;
        $client->skills = $skills;
        $client->occupation = $occupation;

        return $user->client()->save($client);
    }

    public function UpdateClient(string $dob, string $brief, string $gender, string $skills, string $occupation, string $lastName, string $otherNames, string $username, string $email, string $phone, string $address, string $dp_image, bool $newFile, int $id)
    {
        $client = $this->GetByID($id);
        $client->dob = $dob;
        $client->brief = $brief;
        $client->gender = $gender;
        $client->skills = $skills;
        $client->occupation = $occupation;

        $client->user->lastname = $lastName;
        $client->user->name = $lastName .' '. $otherNames;
        $client->user->othernames = $otherNames;
        $client->user->username = $username;
        $client->user->email = $email;
        $client->user->phone = $phone;
        $client->user->address = $address;

        if ($newFile) {
            $client->user->dp_image = $dp_image;
        }

        return $client->push();
    }

    public function ResetClientPwd(int $userId)
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
}
