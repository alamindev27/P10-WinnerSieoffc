<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Review::all();
        return view('admin.reviews.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'file' => 'required|file|mimes:mp4,mov,wmv,avi,flv',
        ]);
        $data = new Review();
        $data->description = $request->description;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/reviews'), $filename);
            $data->file = 'uploads/reviews/' . $filename;
        }
        $data->save();
        return redirect()->route('admin.reviews.index')->with('success', 'Review created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Review::find($id);
        return view('admin.reviews.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'description' => 'required',
            'file' => 'nullable|file|mimes:mp4,mov,wmv,avi,flv',
        ]);
        $data = Review::find($id);
        $data->description = $request->description;

        if ($request->hasFile('file')) {
            if (file_exists(public_path($data->file))) {
                unlink(public_path($data->file));
            }
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/reviews'), $filename);
            $data->file = 'uploads/reviews/' . $filename;
        }
        $data->save();
        return redirect()->route('admin.reviews.index')->with('success', 'Review updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Review::find($id);
        if (file_exists(public_path($data->file))) {
                unlink(public_path($data->file));
            }
        $data->delete();
        return redirect()->route('admin.reviews.index')->with('success', 'Review deleted successfully.');
    }
}
