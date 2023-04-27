<?php

namespace App\Services\Url;
use App\Services\BaseService;
use App\Repositories\Url\UrlRepositoryContract;

class UrlService extends BaseService implements UrlServiceContract
{
    public $repository;

    public function __construct(UrlRepositoryContract $repository)
    {
        $this->repository = $repository;
    }
}