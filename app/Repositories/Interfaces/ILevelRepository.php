<?php

namespace App\Repositories\Interfaces;

interface ILevelRepository
{
    public function SaveLevel(string $name, string $code, string $description, int $department_id, bool $status);

    public function UpdateLevel(string $name, string $code, string $description, int $department_id, int $id);

    public function CheckNameExist(string $name, int $exclussion);

    public function CheckCodeExist(string $code, int $exclussion);
}
