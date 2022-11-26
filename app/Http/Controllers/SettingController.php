<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Services\SettingService;
use App\Validations\SettingValidation;

class SettingController extends Controller
{
    /**
     * Service Instance
     * 
     * @var App\Services\SettingService
     */
    protected $settingService;

    /**
     * Validation Instance
     * 
     * @var App\Validations\SettingValidation
     */
    protected $settingValidation;

    /**
     * Constructor
     * 
     * @param App\Services\SettingService $settingService
     * @param App\Validations\SettingValidation $settingValidation
     */
    public function __construct(
        SettingService $settingService,
        SettingValidation $settingValidation
    ) {
        $this->settingService = $settingService;
        $this->settingValidation = $settingValidation;
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
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $validation = $this->settingValidation->update($request);
        
        if (!$validation->status) {
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $validation->message
            ], 422);
        }

        $result = $this->settingService->update($request);

        return response()->json([
            'status' => $result->status,
            'message' => $result->message,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
