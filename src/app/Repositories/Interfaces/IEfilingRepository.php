<?php

namespace App\Repositories\Interfaces;

interface IEfilingRepository
{
    public function SaveEfiling(string $name, string $description, string $filepath, int $category_id, int $user_id);

    public function UpdateEfiling(string $name, string $description, string $filepath, int $category_id, int $user_id, int $id);

    public function CheckEfilingExist(string $name, int $category_id, int $exclussion);

    public function TopEfiling(int $count);

    public function LatestEfiling(int $count);

    public function GetAllPaginated(int $count);
}
