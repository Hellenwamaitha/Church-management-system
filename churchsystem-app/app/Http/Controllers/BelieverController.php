<?php

namespace App\Http\Controllers;

use App\Models\Believer;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreBelieverRequest;
use App\Http\Requests\UpdateBelieverRequest;

class BelieversController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('believers.index', [
            'believers' => Believer::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('believers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBelieverRequest $request): RedirectResponse
    {
        Believer::create($request->all());
        return redirect()->route('believers.index')
                ->withSuccess('New believer is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Believer $believer): View
    {
        return view('believers.show', [
            'believer' => $believer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Believer $believer): View
    {
        return view('believers.edit', [
            'believer' => $believer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBelieverRequest $request, Believer $believer): RedirectResponse
    {
        $believer->update($request->all());
        return redirect()->back()
                ->withSuccess('Believer is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Believer $believer): RedirectResponse
    {
        $believer->delete();
        return redirect()->route('believers.index')
                ->withSuccess('Believer is deleted successfully.');
    }
}
