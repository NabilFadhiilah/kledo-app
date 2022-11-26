<?php

namespace App\Validations;

use Illuminate\Support\Facades\Validator;

class OvertimeValidation
{
    /**
     * Store validation.
     * 
     * @param  $request
     * @return  ArrayObject
     */
    public function store($request)
    {

        $result = [];
        $result['status'] = false;

        $data = [
            'employee_id' => $request->employee_id,
            'date' => $request->date,
            'time_started' => $request->time_started,
            'time_ended' => $request->time_ended,
        ];

        // Check required parameter is valid
        $niceNames = [
            'employee_id' => 'ID Karyawan',
            'date' => 'Tanggal',
            'time_started' => 'Waktu Mulai',
            'time_ended' => 'Waktu Selesai',
        ];

        $messages = [
            'required' => ':attribute diperlukan !',
            'date' => ':attribute harus berupa tanggal !',
            'date_format' => ':attribute harus berupa format :format !',
            'after' => ':attribute harus setelah :date !',
            'before' => ':attribute harus sebelum :date !',
            'exists' => ':attribute tidak ditemukan !',
            'unique' => ':attribute sudah ada !',
        ];

        $validation = Validator::make($data, [
            'employee_id' => [
                'required',
                'integer',
                'exists:employees,id',
            ],
            'date' => [
                'required',
                'date',
                'date_format:Y-m-d',
                'unique:overtimes,date,NULL,id,employee_id,' . $request->employee_id,
            ],
            'time_started' => [
                'required',
                'date_format:H:i',
                'before:time_ended',
            ],
            'time_ended' => [
                'required',
                'date_format:H:i',
                'after:time_started',
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

    /**
     * Calculate validation.
     * 
     * @param  $request
     * @return  ArrayObject
     */
    public function calculate($request)
    {
        $result = [];
        $result['status'] = false;

        $data = [
            'month' => $request->month,
        ];

        // Check required parameter is valid
        $niceNames = [
            'month' => 'Bulan',
        ];

        $messages = [
            'required' => ':attribute diperlukan !',
            'date_format' => ':attribute harus berupa format :format !',
        ];

        $validation = Validator::make($data, [
            'month' => [
                'required',
                'date_format:Y-m',
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
