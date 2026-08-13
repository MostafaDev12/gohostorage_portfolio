<?php

namespace App\Services\Dashboard;

use App\Models\Faq;

class FaqService
{
    /**
     * Create a new class instance.
     */
    public function store($data)
    {
       
       return  Faq::create($data);
        
    }

    public function update($data, $faq)
    {
        $data['status'] = $data['status'] ?? 0;
        return $faq->update($data);
    }

    public function delete($selectedIds)
    {
        try {
            return  Faq::whereIn('id', $selectedIds)->delete();
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
