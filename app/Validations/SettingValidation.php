<?php

namespace App\Validations;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SettingValidation
{
    /**
     * Update validation.
     *
     * @param  $request
     * @return  ArrayObject
     */
    public function update($request)
    {

        $result = [];
        $result['status'] = false;

        $data = [
            'key' => $request->key,
            'value' => $request->value,
        ];

        // Check required parameter is valid
        $niceNames = [
            'key' => 'Key',
            'value' => 'Value',
        ];

        $messages = [
            'required' => ':attribute diperlukan !',
            'in' => ':attribute harus diisi dengan :values !',
            'exists' => ':attribute tidak ditemukan !',
        ];

        $validation = Validator::make($data, [
            'key' => [
                'required', 
                Rule::in(['overtime_method'])
            ],
            'value' => [
                'required',
                Rule::exists('references','id')->where(function ($query) {
                    $query->where('code', 'overtime_method');
                }),
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
