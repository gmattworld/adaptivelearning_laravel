<?php

namespace App\Repositories\Interfaces;

interface IDepartmentRepository
{
    public function SaveDepartment(string $name, string $code, string $description, int $school_id, bool $status);

    public function UpdateDepartment(string $name, string $code, string $description, int $school_id, int $id);

    public function CheckNameExist(string $name, int $exclussion);

    public function CheckCodeExist(string $code, int $exclussion);
}
