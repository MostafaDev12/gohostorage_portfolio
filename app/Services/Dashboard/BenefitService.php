<?php

namespace App\Services\Dashboard;

use App\Helper\Media;
use App\Models\Benefit;
use Illuminate\Support\Facades\DB;

class BenefitService
{

    public function store($request, $data)
    {
        DB::beginTransaction();
        try {
            if ($request->hasFile('image')) {
                $data['image'] =   Media::uploadAndAttachImage($request->file('image'),  'benefits');
            }
            if ($request->hasFile('icon')) {
                $data['icon'] =  Media::uploadAndAttachImage($request->file('icon'),  'benefits');
            }

            Benefit::create($data);

            DB::commit();

            return true;
        } catch (\Exception $e) {

            DB::rollBack();

            return false;
        }
    }

    public function update($request, $data, $Benefit)
    {
        DB::beginTransaction();
        try {
            $data['status'] = $data['status'] ?? 0;

            if ($request->hasFile('image')) {
                if ($Benefit->image) {
                    Media::removeFile('Benefits', $Benefit->image);
                }
                $data['image'] =   Media::uploadAndAttachImage($request->file('image'),  'benefits');
            }

            if ($request->hasFile('icon')) {
                if ($Benefit->icon) {
                    Media::removeFile('Benefits', $Benefit->icon);
                }
                $data['icon'] =   Media::uploadAndAttachImage($request->file('icon'),  'benefits');
            }

            $Benefit->update($data);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
    }

    public function delete($selectedIds)
    {
       
        DB::beginTransaction();
        try {
            $Benefits = Benefit::whereIn('id', $selectedIds)->get();
            foreach ($Benefits as $Benefit) {
                if ($Benefit->image) {
                    Media::removeFile('benefits', $Benefit->image);
                }
                if ($Benefit->icon) {
                    Media::removeFile('benefits', $Benefit->icon);
                }
            }
            $deleted = Benefit::whereIn('id', $selectedIds)->delete();
            DB::commit();
            return $deleted > 0;
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
    }
}
