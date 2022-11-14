<?php

namespace App\Repositories;

use App\Helpers\ImageHelper;
use App\Models\Online_casino;

class OnlineCasinoRepository
{
    
    public function store($request)
    {
        $input = $request->all();
        $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'assets/images');
        $input['flug'] = ImageHelper::handleUploadedImage($request->file('flug'),'assets/images');
        
        $input['hot_list'] = json_encode($input['hot_list']);
        Online_casino::create($input);
    }
    


    public function update($online, $request)
    {
        $input = $request->all();
        $photo_path = 'assets/images/' . $online->photo;
        $flug_path = 'assets/images/' . $online->flug;
        if ($request->hasFile('photo')) {
            ImageHelper::handleDeleteImage($photo_path);
            $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'assets/images');
        }
        if ($request->hasFile('flug')) {
            ImageHelper::handleDeleteImage($flug_path);
            $input['flug'] = ImageHelper::handleUploadedImage($request->file('flug'),'assets/images');
        }

        
        $input['hot_list'] = json_encode($input['hot_list']);
        
        $online->update($input);
    }


    
    public function delete($online)
    {
        
        $photo_path = 'assets/images/' . $online->photo;
        $flug_path = 'assets/images/' . $online->flug;


        ImageHelper::handleDeleteImage($photo_path);
        ImageHelper::handleDeleteImage($flug_path);

        $online->delete();
    }
}
