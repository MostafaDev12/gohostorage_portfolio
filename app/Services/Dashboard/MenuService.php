<?php

namespace App\Services\Dashboard;

use App\Models\Dashboard\Menu;

class MenuService
{
    public function store($data)
    {
        Menu::create($data);
    }

    public function update($data, $menu)
    {
        $data['status'] = $data['status'] ?? 0;
        $menu->update($data);
    }

    public function delete($selectedIds)
    {

        try {
            return  Menu::whereIn('id', $selectedIds)->delete();
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
