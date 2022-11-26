<?php

namespace App\Validations;

use Illuminate\Support\Facades\Validator;

class EmployeeValidation
{
    /**
     * Store validation.
     *
     * @param  $request
     * @return  ArrayObject
     */
    public function store($request){
            
            $result = [];
            $result['status'] = false;
    
            $data = [
                'name' => $request->name,
                'salary' => $request->salary,
                'password' => $request->password,
                'role' => $request->role,
            ];
    
            // Check required parameter is valid
            $niceNames = [
                'name' => 'Nama',
                'salary' => 'Gaji',
            ];
    
            $messages = [
                'required' => ':attribute diperlukan !',
                'unique' => ':attribute sudah digunakan !',
                'min' => ':attribute minimal :min karakter !',
                'integer' => ':attribute harus berupa angka !',
                'between' => ':attribute harus diantara :min sampai :max juta !',
                'string' => ':attribute harus berupa string !',
            ];

            $validation = Validator::make($data, [
                'name' => [
                    'required',
                    'string',
                    'min:2',
                    'unique:employees,name',
                ],
                'salary' => [
                    'required',
                    'integer',
                    'between:2000000,10000000',
                ],
            ], $messages, $niceNames);

            if ($validation->fails()) {
                $result['message'] = $validation->errors();
                return (object) $result;
            }

            // Validation success
            $result['status'] = true;
            $result['message'] = 'Validasi berhasil !';
            $result = (object) $result;

            return $result;
    }
}
