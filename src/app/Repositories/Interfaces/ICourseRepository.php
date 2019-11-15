<?php

namespace App\Repositories\Interfaces;

interface ICourseRepository
{
    public function SaveCourse(string $name, string $code, string $description, int $level_id, bool $status);

    public function UpdateCourse(string $name, string $code, string $description, int $level_id, int $id);

    public function CheckNameExist(string $name, int $exclussion);

    public function CheckCodeExist(string $code, int $exclussion);

    public function LatestPost(int $count);

    public function GetAllPaginated(int $count);
}
