<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Service::with('currentPrice')->paginate(10);
        return view('back.services.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.services.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'price' => 'required|numeric|min:0',
            'valid_from' => 'required|date',
        ]);

        // نقفل السعر الحالي (لو موجود)
        if ($service->currentPrice) {
            $service->currentPrice->update([
                'valid_to' => now()->subDay(),
            ]);
        }

        // نضيف السعر الجديد
        $service->prices()->create([
            'price' => $request->price,
            'valid_from' => $request->valid_from,
            'valid_to' => null,
        ]);

        return redirect()->route('dashboard.services.index')
            ->with('success', __('main.price_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
