<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;
use App\Services\ReferenceService;
use App\Validations\ReferenceValidation;

class ReferenceController extends Controller
{
    /**
     * Service Instance
     * 
     * @var App\Services\ReferenceService
     */
    protected $referenceService;

    /**
     * Validation Instance
     * 
     * @var App\Validations\ReferenceValidation
     */
    protected $referenceValidation;

    /**
     * Constructor
     * 
     * @param App\Services\ReferenceService $referenceService
     * @param App\Validations\ReferenceValidation $referenceValidation
     */
    public function __construct(
        ReferenceService $referenceService,
        ReferenceValidation $referenceValidation
    ) {
        $this->referenceService = $referenceService;
        $this->referenceValidation = $referenceValidation;
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
     * @param  \App\Models\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function show(Reference $reference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function edit(Reference $reference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reference $reference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reference $reference)
    {
        //
    }
}
