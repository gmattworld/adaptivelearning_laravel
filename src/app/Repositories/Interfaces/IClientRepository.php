<?php

namespace App\Repositories\Interfaces;

interface IClientRepository
{
    public function SaveClient(string $dob, string $brief, string $gender, string $skills, string $occupation, string $lastName, string $otherNames, string $username, string $email, string $phone, string $address, string $dp_image, bool $status);

    public function UpdateClient(string $dob, string $brief, string $gender, string $skills, string $occupation, string $lastName, string $otherNames, string $username, string $email, string $phone, string $address, string $dp_image, bool $newFile, int $id);

    public function ResetClientPwd(int $userID);

    public function CheckUserNameExist(string $username, int $exclussion);

    public function CheckPhoneExist(string $phone, int $exclussion);

    public function CheckEmailExist(string $email, int $exclussion);
}
