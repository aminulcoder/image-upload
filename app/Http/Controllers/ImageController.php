<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function index() {
        $photos = Image::all();
        // return  $photos;
        return view('index' ,compact('photos'));
    }

    public function create()
    {
        return view('upload');
    }


    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $imageData = ['image' => $imageName];

        Image::create($imageData);
        return redirect()->route('image')->with('success', 'Image uploaded successfully.');

    }
}
