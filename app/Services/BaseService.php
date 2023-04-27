<?php

namespace App\Services;
use App\Services\BaseServiceContract;

abstract class BaseService implements BaseServiceContract
{
    public function create($data)
    {
        return $this->repository->create($data);
    }

    public function read($id)
    {
        return $this->repository->read($id);
    }

    public function update($id, $data)
    {
        return $this->repository->update($data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}