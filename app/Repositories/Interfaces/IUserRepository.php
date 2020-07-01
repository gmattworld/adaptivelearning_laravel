<?php

namespace App\Repositories\Interfaces;

interface IUserRepository
{
    public function SaveUser(string $lastName, string $otherNames, string $username, string $email, string $phone, string $address, int $user_type_id, string $dp_image, bool $status);

    public function UpdateUser(string $lastName, string $otherNames, string $username, string $email, string $phone, string $address, int $user_type_id, string $dp_image, bool $newFile, int $id);

    public function ResetUserPwd(int $userID);

    public function CheckUserNameExist(string $username, int $exclussion);

    public function CheckPhoneExist(string $phone, int $exclussion);

    public function CheckEmailExist(string $email, int $exclussion);
}
