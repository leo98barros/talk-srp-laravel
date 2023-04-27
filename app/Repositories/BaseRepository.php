<?php

namespace App\Repositories;

abstract class BaseRepository implements BaseRepositoryContract
{
    public function create($data)
    {
        return $this->model->create($data);
    }

    public function read($id)
    {
        return $this->model->find($id);
    }

    public function update($id, $data)
    {
        return $this->model->update($data);
    }

    public function delete($id)
    {
        return $this->model->delete($id);
    }
}
