<?php

namespace App\Repositories;

use App\Repositories\Interfaces\IBaseRepository;

abstract class BaseRepository implements IBaseRepository
{
    // model property on class instances
    protected $model;

    /**
     * @var App
     */
    private $app;

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    abstract function model();

    // Constructor to bind model to repo
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->MakeModel();
    }

    // Get all instances of model
    public function GetAll()
    {
        return $this->model->all();
    }

    // create a new record in the database
    public function Save(array $data)
    {
        return $this->model->create($data);
    }

    // create a new record in the database
    public function SaveRelationship(object $data)
    {
        return $this->model->push($data);
    }

    // update record in the database
    public function Update(array $data, $id)
    {
        $record = $this->model->findOrFail($id);
        $record->update($data);
        return $record;
    }

    // remove record from the database
    public function Delete($id)
    {
        return $this->model->destroy($id);
    }

    // show the record with the given id
    public function GetOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    // show the record with the given id
    public function GetByID($id)
    {
        return $this->model->find($id);
    }

    // Get the associated model
    public function GetModel()
    {
        return $this->model;
    }

    // Set the associated model
    public function SetModel($model)
    {
        $this->model = $model;
        return $this;
    }

    // Eager load database relationships
    public function with($relations)
    {
        return $this->model->with($relations);
    }

    public function GetByCriteria(array $data)
    {
        return $this->model->where($data)->get();
    }

    public function PaginateAll(int $ItemsPerPage)
    {
        return $this->model->all()->paginate($ItemsPerPage);
    }

    public function PaginateByCriteria(array $criteria, int $ItemsPerPage)
    {
        return $this->model->where($criteria)->paginate($ItemsPerPage);
    }

    public function PaginateOrderByCriteria(string $criteria, string $order, int $ItemsPerPage)
    {
        return $this->model->orderBy($criteria, $order)->paginate($ItemsPerPage);
    }

    public function GetAllAndOrder(string $key, string $order)
    {
        return $this->model->orderBy($key, $order)->get();
    }

    public function GetByCriteriaAndOrder(Array $criteria, string $key, string $order)
    {
        return $this->model->where($criteria)->orderBy($key, $order)->get();
    }

    public function GetByCriteriaOrderAndPaginate(array $criteria, string $key, string $order, int $ItemsPerPage)
    {
        return $this->model->where($criteria)->orderBy($key, $order)->paginate($ItemsPerPage);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Builder
     * @throws RepositoryException
     */
    public function MakeModel()
    {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model) {
            throw new Exception('Error detected');
        }
        return $this->model = $model->newQuery();
    }
}
