<?php

namespace App\Repositories;

use App\Helpers\ImageHelper;
use App\Models\Other_game;

class OtherGamesRepository
{
    
    
    public function store($request)
    {
        $input = $request->all();
        // $input['category_id'] = $request->category_id;
        $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'assets/images');
        
        Other_game::create($input);
    }
    


    public function update($game, $request)
    {
        $input = $request->all();
        $photo_path = 'assets/images/' . $game->photo;

        if ($request->hasFile('photo')) {
            ImageHelper::handleDeleteImage($photo_path);
            $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'assets/images');
        }
        
        $game->update($input);
    }


    
    public function delete($game)
    {
        
        $photo_path = 'assets/images/' . $game->photo;
        ImageHelper::handleDeleteImage($photo_path);
        $game->delete();
    }
}