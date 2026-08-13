<?php
namespace App\Services\Dashboard;

use App\Helper\Media;
use Illuminate\Support\Facades\DB;

class AboutService{

    public function update($request, $data, $about)
    {

        DB::beginTransaction();
        
        try {

            if ($request->hasFile('image')) {
                if ($about->image) {
                    Media::removeFile('about', $about->image);
                }
                $data['image'] =   Media::uploadAndAttachImage($request->file('image'),  'about');
            }

            if ($request->hasFile('banner')) {
                if ($about->banner) {
                    Media::removeFile('about', $about->banner);
                }
                $data['banner'] =   Media::uploadAndAttachImage($request->file('banner'),  'about');
            }

            $about->update($data);

            DB::commit();

            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
    }
}
