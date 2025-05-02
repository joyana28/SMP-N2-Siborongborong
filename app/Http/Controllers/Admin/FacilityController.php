<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::latest()->get();
        return view('admin.facilities.index', compact('facilities'));
    }

    public function create()
    {
        return view('admin.facilities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $facility = new Facility();
        $facility->title = $request->title;
        $facility->description = $request->description;
        $facility->is_active = $request->has('is_active');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/facilities', $imageName);
            $facility->image = 'facilities/' . $imageName;
        }

        $facility->save();

        return redirect()->route('admin.facilities.index')
            ->with('success', 'Fasilitas berhasil ditambahkan');
    }

    public function edit(Facility $facility)
    {
        return view('admin.facilities.edit', compact('facility'));
    }

    public function update(Request $request, Facility $facility)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $facility->title = $request->title;
        $facility->description = $request->description;
        $facility->is_active = $request->has('is_active');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($facility->image) {
                Storage::delete('public/' . $facility->image);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/facilities', $imageName);
            $facility->image = 'facilities/' . $imageName;
        }

        $facility->save();

        return redirect()->route('admin.facilities.index')
            ->with('success', 'Fasilitas berhasil diperbarui');
    }

    public function destroy(Facility $facility)
    {
        if ($facility->image) {
            Storage::delete('public/' . $facility->image);
        }
        
        $facility->delete();

        return redirect()->route('admin.facilities.index')
            ->with('success', 'Fasilitas berhasil dihapus');
    }
} 