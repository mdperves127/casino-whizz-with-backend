<?php

namespace App\Repositories;

use App\Helpers\ImageHelper;
use App\Models\Setting;

class SettingRepository
{

    public function update($request)
    {
        
        $data = Setting::find(1);
        $input = $request->all();
   

        $image_files = ['logo','banner_photo','banner_bg','exclusive_photo'];

        foreach($image_files as $image_file){
            if ($file = $request->file($image_file)) {
                $input[$image_file] = ImageHelper::handleUpdatedUploadedImage($file,'/assets/images',$data,'/assets/images/',$image_file);
            }
        }
        $data->update($input);
    }
}