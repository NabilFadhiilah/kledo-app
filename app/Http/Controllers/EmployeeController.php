<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Services\EmployeeService;
use App\Validations\EmployeeValidation;

class EmployeeController extends Controller
{
    /**
     * Service Instance
     * 
     * @var App\Services\EmployeeService
     */
    protected $employeeService;

    /**
     * Validation Instance
     * 
     * @var App\Validations\EmployeeValidation
     */
    protected $employeeValidation;

    /**
     * Constructor
     * 
     * @param App\Services\EmployeeService $employeeService
     * @param App\Validations\EmployeeValidation $employeeValidation
     */
    public function __construct(
        EmployeeService $employeeService,
        EmployeeValidation $employeeValidation
    ) {
        $this->employeeService = $employeeService;
        $this->employeeValidation = $employeeValidation;
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
        $validation = $this->employeeValidation->store($request);

        if (!$validation->status) {
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $validation->message
            ], 422);
        }

        $result = $this->employeeService->store($request);

        return response()->json([
            'status' => $result->status,
            'message' => $result->message,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
