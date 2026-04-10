<?php

namespace App\Http\Controllers;

use App\Models\DropOffItem;

class DropOffController extends Controller
{
    public function index()
    {
        $items = DropOffItem::query()
            ->where('is_active', true)
            ->orderByRaw('COALESCE(`order`, 999999) asc')
            ->latest('id')
            ->get();

        return view('drop-off.index', compact('items'));
    }
}
