<?php

namespace App\Repositories\Interfaces;

interface IArchiveRepository
{
    public function SaveArchive(string $name, string $description, string $filepath, int $case_id, int $user_id, int $casetype_id);

    public function UpdateArchive(string $name, string $description, string $filepath, int $case_id, int $user_id, int $casetype_id, int $id);

    public function CheckArchiveExist(string $name, int $case_id, int $exclussion);

    public function TopArchive(int $count);

    public function LatestArchive(int $count);

    public function GetAllPaginated(int $count);
}
