<?php

namespace App\Services;

interface BaseServiceContract
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