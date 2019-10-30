<?php

namespace App\Repositories;


use App\CourtRoom;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interfaces\ICourtRoomRepository;
use CourtRoomStatusEnum;

class CourtRoomRepository extends BaseRepository implements ICourtRoomRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(CourtRoom $courtroom)
    {
        $this->model = $courtroom;
    }

    /*
    * Abstract class implementation
    */
    public function model()
    {
        return $this->model;
    }

    public function SaveCourtRoom(string $name, string $seat_count, string $location, int $court_id, $availability, bool $status)
    {
        return $this->Save([
            'name' => $name,
            'court_id' => $court_id,
            'seat_count' => $seat_count,
            'status' => $availability,
            'location' => $location,
            'is_active' => $status
        ]);
    }

    public function UpdateCourtRoom(string $name, string $seat_count, string $location, int $court_id, int $id) {
        $data = [
            'name' => $name,
            'court_id' => $court_id,
            'seat_count' => $seat_count,
            'location' => $location,
        ];

        return $this->update($data, $id);
    }

    public function CheckCourtRoomExist(string $name, int $court_id, int $exclussion)
    {
        if($exclussion > 0){
            return $this->model->where([['name', '=', $name], ['court_id', '=', $court_id], ['id', '<>', $exclussion]])->exists();
        }else{
            return $this->model->where([['name', '=', $name], ['court_id', '=', $court_id]])->exists();
        }
    }
}
