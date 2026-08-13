<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Servers\DeleteServerRequest;
use App\Http\Requests\Dashboard\Servers\StoreServerRequest;
use App\Http\Requests\Dashboard\Servers\UpdateServerRequest;
use App\Models\Server;
use App\Services\Dashboard\ServerService;
use Illuminate\Http\Request;

class ServersController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('servers.view');

        $servers = Server::with('parentServer')->orderBy('id','desc')->get();

        return view('Dashboard.Servers.index', compact('servers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $this->authorize('servers.create');

        $servers = Server::with('parentserver')->get();
        return view('Dashboard.Servers.create', compact('servers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServerRequest $request)
    {

        $this->authorize('servers.store');

        try {
            $dataValidated = $request->validated();

            $response = (new ServerService())->store($request, $dataValidated);

            if(!$response) {
                return redirect()->back()->with(['error' => __('dashboard.failed_to_add_item')]);
            }

            return redirect()->back()->with(['success' => __('dashboard.your_item_added_successfully')]);
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => __('dashboard.failed_to_add_item')]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(server $server)
    {
        $this->authorize('servers.edit');

        $servers = Server::with('parentserver')->get();
        return view('Dashboard.Servers.edit', compact('server', 'servers'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateServerRequest $request, server $server)
    {

        $this->authorize('servers.update');

        try {
            $dataValidated = $request->validated();

            $response = (new serverService())->update($request, $dataValidated, $server);
            if(!$response) {
                return redirect()->back()->with(['error' => __('dashboard.failed_to_update_item')]);
            }

            return redirect()->back()->with(['success' => __('dashboard.your_item_updated_successfully')]);
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => __('dashboard.failed_to_update_item')]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteServerRequest $request, string $id)
    {
        $this->authorize('servers.delete');

        $selectedIds = $request->input('selectedIds');

        $data = $request->validated();

        $deleted = (new serverService())->deleteservers($selectedIds,$data);


        if (request()->ajax()) {
            if (!$deleted) {
                return response()->json(['message' => $deleted ?? __('dashboard.an messages.error entering data')], 422);
            }
            return response()->json(['success' => true, 'message' => __('dashboard.your_items_deleted_successfully')]);
        }
        if (!$deleted) {
            return redirect()->back()->withErrors($delete ?? __('dashboard.an error has occurred. Please contact the developer to resolve the issue'));
        }
    }
}
