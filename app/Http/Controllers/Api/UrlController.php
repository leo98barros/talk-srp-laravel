<?php

namespace App\Http\Controllers\Api;

use App\Models\Url;
use App\Http\Controllers\Controller;
use App\Services\Url\UrlServiceContract;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    private $service;
    /**
     * UrlController Constructor
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
    public function store(Request $request)
    {
        
        $model = $this->service->create($request->all());

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
    public function update(Request $request, string $id)
    {
        return response()->json(['update']);
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
