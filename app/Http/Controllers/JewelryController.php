<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Jewelry;
use Illuminate\Http\Request;

class JewelryController extends Controller
{
    public function index()
    {
        $jewelries = Jewelry::with('media')->latest()->get();

        return Inertia::render('Jewelry/Index', [
            'jewelries' => $jewelries,
        ]);
    }

    public function create()
    {
        return Inertia::render('Jewelry/EditCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'link' => 'required|url',
            'image' => 'required|image|max:10000'
        ]);

        $jewelry = Jewelry::create($request->only(['title', 'link']));

        if ($request->hasFile('image')) {
            $jewelry->addMedia($request->file('image'))->toMediaCollection('jewelry_image');
        }

        return redirect()->route('dashboard.jewelry.index')->with('success', 'Jewelry added successfully.');
    }

    public function edit(Jewelry $jewelry)
    {
        return Inertia::render('Jewelry/EditCreate', [
            'jewelry' => $jewelry->load('media')
        ]);
    }

    public function update(Request $request, Jewelry $jewelry)
    {
        $request->validate([
            'title' => 'required|string',
            'link' => 'required|url',
            'image' => 'nullable|image|max:10000'
        ]);

        $jewelry->update($request->only(['title', 'link']));

        if ($request->hasFile('image')) {
            $jewelry->clearMediaCollection('jewelry_image');
            $jewelry->addMedia($request->file('image'))->toMediaCollection('jewelry_image');
        }

        return redirect()->route('dashboard.jewelry.index')->with('success', 'Jewelry updated successfully.');
    }

    public function destroy(Jewelry $jewelry)
    {
        $jewelry->delete();
        return redirect()->route('dashboard.jewelry.index')->with('success', 'Jewelry deleted successfully.');
    }
}
