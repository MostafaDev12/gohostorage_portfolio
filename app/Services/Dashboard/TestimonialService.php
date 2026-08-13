<?php

namespace App\Services\Dashboard;

use App\Helper\Media;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;

class TestimonialService
{
    /**
     * Create a new class instance.
     */
    public function store($request, $data)
    {
        DB::beginTransaction();

        try {
            if ($request->hasFile('image')) {
                $data['image'] = Media::uploadAndAttachImage($request->file('image'), 'testimonials');
            }

            Testimonial::create($data);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
          throw $e;
        }
    }

    public function update($request, $data, $testimonial)
    {
        DB::beginTransaction();

        try {
            if ($request->hasFile('image')) {
                if ($testimonial->image) {
                    Media::removeFile('testimonials', $testimonial->image);
                }
                $data['image'] =  Media::uploadAndAttachImage($request->file('image'), 'testimonials');
            }
            $testimonial->update($data);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function delete($selectedIds)
    {
        $testimonials = Testimonial::whereIn('id', $selectedIds)->get();

        DB::beginTransaction();

        try {
            foreach ($testimonials as $testimonial) {
                // Delete associated image if it exists
                if ($testimonial->image) {
                    Media::removeFile('about_structs', $testimonial->image);
                }
            }
            $deleted = Testimonial::whereIn('id', $selectedIds)->delete();

            DB::commit();

            return $deleted > 0;

        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }
    }
}
