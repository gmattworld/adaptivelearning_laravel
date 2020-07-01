<?php

namespace App\Repositories\Interfaces;

interface IBaseRepository
{
    public function GetAll();

    public function Save(array $data);

    public function Update(array $data, $id);

    public function Delete($id);

    public function GetByID($id);

    public function PaginateAll(int $ItemsPerPage);

    public function PaginateByCriteria(array $criteria, int $ItemsPerPage);

    public function PaginateOrderByCriteria(string $criteria, string $order, int $ItemsPerPage);

    public function GetByCriteria(array $data);

    public function GetAllAndOrder (string $key, string $order);

    public function GetByCriteriaAndOrder(array $criteria, string $key, string $order);

    public function GetByCriteriaOrderAndPaginate(array $criteria, string $key, string $order, int $ItemsPerPage);
}
