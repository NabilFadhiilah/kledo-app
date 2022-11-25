<?php

namespace App\Http\Controllers;

use App\Models\Overtime;
use Illuminate\Http\Request;
use App\Services\OvertimeService;
use App\Validations\OvertimeValidation;

class OvertimeController extends Controller
{
    /**
     * Service Instance
     * 
     * @var App\Services\OvertimeService
     */
    protected $overtimeService;

    /**
     * Validation Instance
     * 
     * @var App\Validations\OvertimeValidation
     */
    protected $overtimeValidation;

    /**
     * Constructor
     * 
     * @param App\Services\OvertimeService $overtimeService
     * @param App\Validations\OvertimeValidation $overtimeValidation
     */
    public function __construct(
        OvertimeService $overtimeService,
        OvertimeValidation $overtimeValidation
    ) {
        $this->overtimeService = $overtimeService;
        $this->overtimeValidation = $overtimeValidation;
    }
    
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function show(Overtime $overtime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function edit(Overtime $overtime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Overtime $overtime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Overtime $overtime)
    {
        //
    }
}
