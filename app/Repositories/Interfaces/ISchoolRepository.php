<?php

namespace App\Repositories\Interfaces;

interface ISchoolRepository
{
    public function SaveSchool(string $name, string $code, string $description, bool $status);

    public function UpdateSchool(string $name, string $code, string $description, int $id);

    public function CheckNameExist(string $name, int $exclussion);

    public function CheckCodeExist(string $code, int $exclussion);
}
