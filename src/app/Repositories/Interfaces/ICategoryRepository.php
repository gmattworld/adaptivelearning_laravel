<?php

namespace App\Repositories\Interfaces;

interface ICategoryRepository
{
    public function SaveCategory(string $name, string $code, string $description, bool $status);

    public function UpdateCategory(string $name, string $code, string $description, int $id);

    public function CheckNameExist(string $name, int $exclussion);

    public function CheckCodeExist(string $code, int $exclussion);
}
