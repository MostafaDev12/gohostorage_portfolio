<?php

namespace App\Services\Dashboard;

use App\Helper\Media;
use App\Models\Server;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ServerService
{
     public function store($request,$dataValidated)
    {
        DB::beginTransaction();

        try {
            // Generate slugs
            $dataValidated['slug_ar'] = Str::slug($dataValidated['name_ar']);
            $dataValidated['slug_en'] =  Str::slug($dataValidated['name_en']);

            if ($request->hasFile('image')) {
                $dataValidated['image'] = Media::uploadAndAttachImage($request->file('image'), 'servers');
            }

            if($request->hasFile('icon')) {
                $dataValidated['icon'] = Media::uploadAndAttachImage($request->file('icon'), 'servers');
            }

            // Create the server
            Server::create($dataValidated);

            DB::commit();

            return true;
        } catch (\Exception $e) {

            DB::rollBack();

            throw $e;
        }
    }

    public function update($request, $dataValidated, $server)
    {
        DB::beginTransaction();

        try{
            $dataValidated['status'] = $dataValidated['status'] ?? 0;
            $dataValidated['index'] = $dataValidated['index'] ?? 0;
            $dataValidated['show_in_home'] = $dataValidated['show_in_home'] ?? 0;
            $dataValidated['show_in_header'] = $dataValidated['show_in_header'] ?? 0;



            if ($request->hasFile('icon')) {
                if ($server->icon) {
                    Media::removeFile('servers', $server->icon);
                }
                $dataValidated['icon'] = Media::uploadAndAttachImage($request->file('icon'), 'servers');
            }
            if ($request->hasFile('image')) {
                if ($server->image) {
                    Media::removeFile('servers', $server->image);
                }
                $dataValidated['image'] = Media::uploadAndAttachImage($request->file('image'), 'servers');
            }

            $server->Update($dataValidated);

            DB::commit();
            return true;

        }catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

    }

    public function deleteservers($selectedIds)
    {
        $servers = server::whereIn('id', $selectedIds)->get();

        DB::beginTransaction();
        try {
            foreach ($servers as $server) {
                // Delete associated image if it exists
                if ($server->image) {
                    Media::removeFile('servers', $server->image);
                }
                // Delete associated Icon if it exists
                if ($server->icon) {
                    Media::removeFile('servers', $server->icon);
                }
            }
            $deleted = server::whereIn('id', $selectedIds)->delete();

            DB::commit();

            return $deleted > 0;

        } catch (\Exception $e) {

            DB::rollBack();

           throw $e;
        }
    }
}
