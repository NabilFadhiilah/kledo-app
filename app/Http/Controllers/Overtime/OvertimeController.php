<?php

namespace App\Http\Controllers\Overtime;

use App\Models\overtime;
use App\Http\Controllers\Controller;
use App\Http\Requests\Overtime\StoreOvertimeRequest;
use App\Http\Requests\Overtime\UpdateOvertimeRequest;

class OvertimeController extends Controller
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
     * @param  \App\Http\Requests\StoreOvertimeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOvertimeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function show(overtime $overtime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function edit(overtime $overtime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateovertimeRequest  $request
     * @param  \App\Models\overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateovertimeRequest $request, overtime $overtime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function destroy(overtime $overtime)
    {
        //
    }
}
