<?php

namespace App\Repositories\Interfaces;

interface IUserRoleRepository
{
    public function SaveUserRole(string $lastName, string $otherNames, string $userName, string $email, string $phone, string $userType, string $fileName);

    public function UpdateUserRole(string $lastName, string $otherNames, string $userName, string $email, string $phone, bool $newFile, string  $fileName, int $id);

    public function CheckUserRoleExist(string $userName, int $exclussion);
}
