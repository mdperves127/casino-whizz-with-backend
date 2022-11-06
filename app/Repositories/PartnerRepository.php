<?php

namespace App\Repositories;

use App\Helpers\ImageHelper;
use App\Models\Partners;

class PartnerRepository
{

    public function store($request)
    {
        $input = $request->all();
        $input['partner_logo'] = ImageHelper::handleUploadedImage($request->file('partner_logo'),'assets/images');
        Partners::create($input);
    }

    /**
     * Update Brand.
     *
     * @param  \App\Http\Requests\ImageUpdateRequest  $request
     * @return void
     */

    public function update($partner, $request)
    {
        $input = $request->all();

        $path = 'assets/images/' . $partner->partner_logo;

        if ($request->hasFile('partner_logo')) {
            ImageHelper::handleDeleteImage($path);
            $input['partner_logo'] = ImageHelper::handleUploadedImage($request->file('partner_logo'),'assets/images');
        }
        $partner->update($input);
    }

    /**
     * Delete Partner.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($partner)
    {
        $path = 'assets/images/' . $partner->partner_logo;
        ImageHelper::handleDeleteImage($path);
        $partner->delete();
    }
}
