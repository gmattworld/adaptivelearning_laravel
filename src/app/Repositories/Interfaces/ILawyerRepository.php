<?php

namespace App\Repositories\Interfaces;

interface ILawyerRepository
{
    public function SaveLawyer(string $dob, string $brief, string $gender, string $skills, string $website, string $facebook, string $twitter, string $linkedin, string $lastName, string $otherNames, string $username, string $email, string $phone, string $address, int $user_type_id, string $dp_image, bool $status);

    public function UpdateLawyer(string $dob, string $brief, string $gender, string $skills, string $website, string $facebook, string $twitter, string $linkedin, string $lastName, string $otherNames, string $username, string $email, string $phone, string $address, int $user_type_id, string $dp_image, bool $newFile, int $id);

    public function ResetLawyerPwd(int $userID);

    public function GetJudges();

    public function GetAndOrderJudges();

    public function CheckUserNameExist(string $username, int $exclussion);

    public function CheckPhoneExist(string $phone, int $exclussion);

    public function CheckEmailExist(string $email, int $exclussion);
}
