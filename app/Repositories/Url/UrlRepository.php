<?php

namespace App\Repositories\Url;

use App\Models\Url;
use App\Repositories\BaseRepository;
use App\Repositories\Url\UrlRepositoryContract;

class UrlRepository extends BaseRepository implements UrlRepositoryContract
{
    public Url $model;

    public function __construct(Url $model)
    {
        $this->model = $model;
    }
}
