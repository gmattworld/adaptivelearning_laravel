<?php

namespace App\Repositories\Interfaces;

interface IQualificationRepository
{
    public function SaveQualification(string $name, string $code, string $description, bool $status);

    public function UpdateQualification(string $name, string $code, string $description, int $id);

    public function CheckNameExist(string $name, int $exclussion);

    public function CheckTitleExist(string $code, int $exclussion);
}
