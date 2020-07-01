<?php

namespace App\Repositories\Interfaces;

interface IContactRepository
{
    public function SaveContact(string $name, string $email, string $subject, string $message);
}
