<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Url\StoreUrlRequest;
use App\Http\Requests\Api\Url\UpdateUrlRequest;
use App\Services\Url\UrlServiceContract;

class UrlController extends Controller
{
    /** 
     * @var UrlServiceContract
     */
    private UrlServiceContract $service;

    /**
     * UrlController Constructor
     * 
     * @param UrlServiceContract $service
     */
    public function __construct(UrlServiceContract $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {     
        return response()->json(['index']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUrlRequest $request)
    {
        $data = $request->validated();

        $model = $this->service->create($data);

        return response()->json($model);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = $this->service->read($id);
        
        return response()->json($model);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUrlRequest $request, string $id)
    {
        $data = $request->validated();

        $model = $this->service->update($id, $data);

        return response()->json($model);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = $this->service->delete($id);

        return response()->json($model);
    }
}
