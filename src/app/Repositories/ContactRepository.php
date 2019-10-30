<?php

namespace App\Repositories;

use App\Repositories\Interfaces\IContactRepository;
use App\Contact;

class ContactRepository extends BaseRepository implements IContactRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Contact $Contact)
    {
        $this->model = $Contact;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveContact(string $name, string $email, string $subject, string $message)
    {
        return $this->save([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
            'is_read' => false
        ]);
    }
}
