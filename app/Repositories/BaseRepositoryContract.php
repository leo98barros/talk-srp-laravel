<?php

namespace App\Repositories;

interface BaseRepositoryContract
{
    /** 
     * @param array $data
     */
    public function create($data);

    /** 
     * @param int $id
     */
    public function read($id);

    /** 
     * @param int $id
     * @param array $data
     */
    public function update($id, $data);

    /** 
     * @param int $id
     */
    public function delete($id);
}