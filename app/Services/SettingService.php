<?php 

namespace App\Services;

use App\Models\Setting;

class SettingService
{
    /**
     * Update service.
     *
     * @param  $request
     * @return  ArrayObject
     */
    public function update($request)
    {
        $data = [
            'key' => $request->key,
            'value' => $request->value,
        ];

        $setting = Setting::where('key', $data['key'])->first();
        $setting->update($data);

        $status = true;
        $message = 'Data berhasil diubah !';

        $result = (object) [
            'status' => $status,
            'message' => $message,
        ];

        return $result;
    }
}