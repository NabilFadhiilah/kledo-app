<?php 

namespace App\Services;

use App\Models\Employee;

class EmployeeService
{
    /**
     * Store Service.
     * 
     * @param  $request
     * @return  ArrayObject
     */
    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'salary' => $request->salary,
        ];

        Employee::create($data);

        $status = true;
        $message = 'Data berhasil ditambahkan !';

        $result = (object) [
            'status' => $status,
            'message' => $message,
        ];

        return $result;
    }
}