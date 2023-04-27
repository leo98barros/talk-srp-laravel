<?php

namespace App\Services;
use App\Services\BaseServiceContract;

abstract class BaseService implements BaseServiceContract
{   
    /** 
     * @param array $data
     */
    public function create($data)
    {
        return $this->repository->create($data);
    }

    /** 
     * @param int $id
     */
    public function read($id)
    {
        return $this->repository->read($id);
    }

    /** 
     * @param int $id
     * @param array $data
     */
    public function update($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    /** 
     * @param int $id
     */
    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}