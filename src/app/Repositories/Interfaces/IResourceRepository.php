<?php

namespace App\Repositories\Interfaces;

interface IResourceRepository
{
    public function SaveResource(string $name, string $code, string $description, int $subject_id, string $pdf_path, string $audio_path, string $video_path, bool $status);

    public function UpdateResource(string $name, string $description, int $subject_id, string $pdf_path, string $audio_path, string $video_path, int $id);

    public function CheckNameExist(string $name, int $exclussion);

    public function CheckCodeExist(string $code, int $exclussion);
}
