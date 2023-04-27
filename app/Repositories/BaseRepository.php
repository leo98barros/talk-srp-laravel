<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryContract
{
    /** 
     * @param array $data
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

    /** 
     * @param int $id
     */
    public function read($id)
    {
        return $this->model->findOrFail($id);
    }

    /** 
     * @param int $id
     * @param array $data
     */
    public function update($id, $data)
    {
        $model = $this->read($id);

        $model->update($data);

        return $model;
    }

    /** 
     * @param int $id
     */
    public function delete($id)
    {
        $model = $this->read($id);

        $model->delete();

        return $model;
    }
}
