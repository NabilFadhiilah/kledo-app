<?php 

namespace App\Services;

use App\Models\Employee;
use App\Models\Overtime;
use App\Models\Setting;

class OvertimeService
{
    /**
     * Store overtime.
     * 
     * @param  $request
     * @return  ArrayObject
     */
    public function store($request)
    {
        $data = [
            'employee_id' => $request->employee_id,
            'date' => $request->date,
            'time_started' => $request->time_started,
            'time_ended' => $request->time_ended,
        ];

        Overtime::create($data);
        
        $status = true;
        $message = 'Data berhasil ditambahkan !';

        $result = (object) [
            'status' => $status,
            'message' => $message,
        ];

        return $result;
    }

    /**
     * Calculate overtime.
     * 
     * @param  $request
     * @return  ArrayObject
     */
    public function calculate($request)
    {
        $data = [
            'month' => $request->month,
        ];

        $expression = Setting::first()->reference->expression;

        $overtimes = Employee::
        with([
            'overtimes' => function($query) use ($data) {
                $query->where('date', 'like', '%'.$data['month'].'%')->selectRaw('employee_id, date, time_started, time_ended, floor((time_to_sec(time_ended) - time_to_sec(time_started)) / 3600) as overtime_duration');
            },
        ])
        ->get();
        dd($overtimes);
        $status = true;
        $message = 'Data berhasil diambil !';

        $result = (object) [
            'status' => $status,
            'message' => $message,
            'data' => $overtimes,
        ];

        return $result;
    }
}