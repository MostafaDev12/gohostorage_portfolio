<?php

namespace App\Services\Dashboard;

use App\Helper\Media;
use App\Models\Dashboard\Slider;
use Illuminate\Support\Facades\DB;

class SliderService
{
    public function store($data,$request)
    {

        DB::beginTransaction();
        try {
            if ($request->hasFile('image')) {
                $data['image'] =   Media::uploadAndAttachImage($request->file('image'),  'sliders');
            }

            Slider::create($data);

            DB::commit();

            return true;
        } catch (\Exception $e) {

            DB::rollBack();

            throw $e;
        }


    }

    public function update($request, $data, $slider)
    {

        DB::beginTransaction();
        try {
            $data['status'] = $data['status'] ?? 0;

            if ($request->hasFile('image')) {
                if ($slider->image) {
                    Media::removeFile('sliders', $slider->image);
                }
                $data['image'] =   Media::uploadAndAttachImage($request->file('image'),  'sliders');
            }



            $slider->update($data);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function delete($selectedIds)
    {
        $sliders = Slider::whereIn('id', $selectedIds)->get();

        DB::beginTransaction();

        try {
            foreach ($sliders as $slider) {
                // Delete associated image if it exists
                if ($slider->image) {
                    Media::removeFile('sliders', $slider->image);
                }
            }
            $deleted = Slider::whereIn('id', $selectedIds)->delete();

            DB::commit();

            return $deleted > 0;

        } catch (\Exception $e) {
            DB::rollBack();

            return false;
        }
    }
}
