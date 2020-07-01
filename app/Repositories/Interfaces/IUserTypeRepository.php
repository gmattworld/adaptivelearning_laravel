<?php

namespace App\Repositories\Interfaces;

interface IUserTypeRepository
{
    public function SaveUserType(string $name, string $description, bool $status);

    public function UpdateUserType(string $name, string $description, int $id);

    public function CheckUserTypeExist(string $name, int $exclussion);
}
