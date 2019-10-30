<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ICourtRepository;
use App\Court;

class CourtRepository extends BaseRepository implements ICourtRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Court $department)
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

    public function SaveCourt(string $name, string $description, string $address, string $contact_person, ?string $alt_contact_person, string $contact_phone, ?string $alt_contact_phone, string $contact_email, ?string $alt_contact_email, string $longitude, string $latitude, bool $status)
    {
        return $this->save([
            'name' => $name,
            'description' => $description,
            'address' => $address,
            'contact_person' => $contact_person,
            'alt_contact_person' => $alt_contact_person,
            'contact_phone' => $contact_phone,
            'alt_contact_phone' => $alt_contact_phone,
            'contact_email' => $contact_email,
            'alt_contact_email' => $alt_contact_email,
            'longitude' => $longitude,
            'latitude' => $latitude,
            'is_active' => $status
        ]);
    }

    public function UpdateCourt(string $name, string $description, string $address, string $contact_person, ?string $alt_contact_person, string $contact_phone, ?string $alt_contact_phone, string $contact_email, ?string $alt_contact_email, string $longitude, string $latitude, int $id) {
        $data = [
            'name' => $name,
            'description' => $description,
            'address' => $address,
            'contact_person' => $contact_person,
            'alt_contact_person' => $alt_contact_person,
            'contact_phone' => $contact_phone,
            'alt_contact_phone' => $alt_contact_phone,
            'contact_email' => $contact_email,
            'alt_contact_email' => $alt_contact_email,
            'longitude' => $longitude,
            'latitude' => $latitude
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

    public function CheckContactPersonExist(string $contact_person, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['contact_person', '=', $contact_person], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where('contact_person', $contact_person)->exists();
        }
    }

    public function CheckAltContactPersonExist(string $alt_contact_person, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['alt_contact_person', '=', $alt_contact_person], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where('alt_contact_person', $alt_contact_person)->exists();
        }
    }

    public function CheckContactEmailExist(string $contact_email, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['contact_email', '=', $contact_email], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where('contact_email', $contact_email)->exists();
        }
    }

    public function CheckAltContactEmailExist(string $alt_contact_email, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['alt_contact_email', '=', $alt_contact_email], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where('alt_contact_email', $alt_contact_email)->exists();
        }
    }

    public function CheckContactPhoneExist(string $contact_phone, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['contact_phone', '=', $contact_phone], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where('contact_phone', $contact_phone)->exists();
        }
    }

    public function CheckAltContactPhoneExist(string $alt_contact_phone, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['alt_contact_phone', '=', $alt_contact_phone], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where('alt_contact_phone', $alt_contact_phone)->exists();
        }
    }
}
