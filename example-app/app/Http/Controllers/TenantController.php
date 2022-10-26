<?php

namespace App\Http\Controllers;

use App\Models\tenant;
use App\Http\Requests\StoretenantRequest;
use App\Http\Requests\UpdatetenantRequest;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretenantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretenantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function show(tenant $tenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function edit(tenant $tenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetenantRequest  $request
     * @param  \App\Models\tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetenantRequest $request, tenant $tenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(tenant $tenant)
    {
        //
    }
}
