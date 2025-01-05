<?php
namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('images', 'public');
            return response()->json(['location' => Storage::url($path)]);
        }

        return response()->json(['error' => 'Invalid file upload.'], 422);
    }
}

