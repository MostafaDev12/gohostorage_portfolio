<?php

namespace App\Services\Dashboard;

use App\Helper\Media;
use App\Models\Dashboard\AboutStruct;
use Illuminate\Support\Facades\DB;

class AboutStructService
{
    /**
     * Create a new class instance.
     */
    public function store($data)
    {
        DB::beginTransaction();

        try {

            $about_struct =  AboutStruct::create($data);

            // handle icon uploads
            Media::uploadAndAttachImages($data, $about_struct, 'about_structs');

            DB::commit();

            return $about_struct;
        } catch (\Exception $e) {

            DB::rollBack();

            throw $e;
        }
    }

    public function update($request, $about_struct, $data)
    {
        DB::beginTransaction();

        try {

            $data['status'] = $data['status'] ?? 0;

            $about_struct->Update($data);

            if ($request->hasFile('icon')) {
                if ($about_struct->icon) {
                    Media::removeFile('about_structs', $about_struct->icon);
                }
                Media::uploadAndAttachImages($data, $about_struct, 'about_structs');
            }
            DB::commit();

            return $about_struct;
        } catch (\Exception $e) {

            DB::rollBack();

            throw $e;
        }
    }

    public function delete($selectedIds)
    {
        $about_struct = AboutStruct::whereIn('id', $selectedIds)->get();

        DB::beginTransaction();
        
        try {
            foreach ($about_struct as $about_struct) {
                // Delete associated image if it exists
                if ($about_struct->icon) {
                    Media::removeFile('about_structs', $about_struct->icon);
                }
            }
            $deleted = AboutStruct::whereIn('id', $selectedIds)->delete();

            DB::commit();

            return $deleted > 0;

        } catch (\Exception $e) {
            DB::rollBack();

            return false;
        }
    }
}
