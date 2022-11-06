<?php

namespace App\Repositories;

use App\Helpers\ImageHelper;
use App\Models\Best_casino;

class BestCasinoRepository
{

    public function store($request)
    {
        $input = $request->all();
        $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'assets/images');
        Best_casino::create($input);
    }

    /**
     * Update Brand.
     *
     * @param  \App\Http\Requests\ImageUpdateRequest  $request
     * @return void
     */

    public function update($best, $request)
    {
        $input = $request->all();

        $path = 'assets/images/' . $best->photo;

        if ($request->hasFile('photo')) {
            ImageHelper::handleDeleteImage($path);
            $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'assets/images');
        }
        $best->update($input);
    }

    /**
     * Delete Partner.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($best)
    {
        $path = 'assets/images/' . $best->photo;
        ImageHelper::handleDeleteImage($path);
        $best->delete();
    }
}
