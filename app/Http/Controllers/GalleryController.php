<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class GalleryController extends Controller
{
    public function index(): InertiaResponse
    {
        $galleries = Gallery::with('media')->latest()->get();

        return Inertia::render('Gallery/Index', [
            'galleries' => $galleries,
        ]);
    }

    public function create(): InertiaResponse
    {
        return Inertia::render('Gallery/EditCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|max:10000'
        ]);

        $gallery = Gallery::create($request->only(['name']));

        if ($request->hasFile('image')) {
            $gallery->addMedia($request->file('image'))->toMediaCollection('gallery_images');
        }

        return redirect()->route('dashboard.gallery.index')->with('success', 'Gallery added successfully.');
    }

    public function edit(Gallery $gallery)
    {
        return Inertia::render('Gallery/EditCreate', [
            'gallery' => $gallery->load('media')
        ]);
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image|max:10000'
        ]);

        $gallery->update($request->only(['name']));

        if ($request->hasFile('image')) {
            $gallery->clearMediaCollection('gallery_images');
            $gallery->addMedia($request->file('image'))->toMediaCollection('gallery_images');
        }

        return redirect()->route('dashboard.gallery.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('dashboard.gallery.index')->with('success', 'Gallery deleted successfully.');
    }
}
