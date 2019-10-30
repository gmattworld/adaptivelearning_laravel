<?php

namespace App\Repositories\Interfaces;

interface ICasesRepository
{
    public function SaveCases(string $name, string $brief, string $details, string $cover_img, int $judge_id, int $category_id, int $user_id, string $status);

    public function UpdateCases(string $name, string $brief, string $details, string $cover_img, int $judge_id, int $category_id, int $user_id, string $status, int $id);

    public function GetAllPaginated(int $count);

    public function GetAllPending();

    public function GetAllOngoing();

    public function GetAllUncompleted();
}
