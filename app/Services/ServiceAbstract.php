<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Exception;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Exception\ExecutionTimeoutException;

class ServiceAbstract
{

    protected Model $model;

    /**
     * Construct the default Controller in the application.
     *
     * @param Model $model
     *
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->model->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  array $data
     *
     * @return
     */
    public function store(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function findBy($id)
    {
        return $this->model->find($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  array $data
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(array $data, $id)
    {
        $resource = $this->model->find($id);
        if(empty($resource)){
            return $resource;
        }
        $resource->update($data);
        return $this->model->find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resource = $this->model->find($id);
        if(empty($resource)) return $resource;
        return $resource->delete();
    }
}
