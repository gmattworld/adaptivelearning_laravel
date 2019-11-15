<?php

namespace App\Repositories\Interfaces;

interface ISubjectRepository
{
    public function SaveSubject(string $name, string $code, string $description, int $course_id, bool $status);

    public function UpdateSubject(string $name, string $code, string $description, int $course_id, int $id);

    public function CheckNameExist(string $name, int $exclussion);

    public function CheckCodeExist(string $code, int $exclussion);
}
