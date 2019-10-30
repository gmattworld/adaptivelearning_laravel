<?php

namespace App\Repositories\Interfaces;

interface ICourtRoomRepository
{
    public function SaveCourtRoom(string $name, string $seat_count, string $location, int $court_id, $availability, bool $status);

    public function UpdateCourtRoom(string $name, string $seat_count, string $location, int $court_id, int $id);

    public function CheckCourtRoomExist(string $name, int $court_id, int $exclussion);
}
