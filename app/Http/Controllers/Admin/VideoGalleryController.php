<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VideoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class VideoGalleryController extends Controller
{
    public function index()
    {
        $videoGalleries = VideoGallery::latest()->get();
        return view('admin.layouts.pages.video-gallery.index', compact('videoGalleries'));
    }

    public function create()
    {
        return view('admin.layouts.pages.video-gallery.create');
    }

    private function convertToEmbedUrl($url)
    {
        // YouTube
        if (str_contains($url, 'youtube.com') || str_contains($url, 'youtu.be')) {
            preg_match('/(youtu\.be\/|v=)([^&]+)/', $url, $matches);
            return 'https://www.youtube.com/embed/' . $matches[2];
        }

        // Vimeo
        if (str_contains($url, 'vimeo.com')) {
            preg_match('/vimeo\.com\/(\d+)/', $url, $matches);
            return 'https://player.vimeo.com/video/' . $matches[1];
        }

        return $url;
    }

    public function store(Request $request)
    {
        $request->validate([
            'video_url' => 'required|url',
            'is_active' => 'nullable|boolean',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image     = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/video_thumbnails'), $imageName);
            $imagePath = 'uploads/video_thumbnails/' . $imageName;
        }

        VideoGallery::create([

            'video_url' => $this->convertToEmbedUrl($request->video_url),
            'is_active' => $request->is_active,
        ]);

        Toastr::success('Video added successfully.');
        return redirect()->route('video-gallery.index');
    }

    public function edit(string $id)
    {
        $videoGallery = VideoGallery::find($id);
        return view('admin.layouts.pages.video-gallery.edit', compact('videoGallery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([

            'video_url' => 'required|url',
            'is_active' => 'nullable|boolean',
        ]);

        $video = VideoGallery::findOrFail($id);

        if ($request->hasFile('image')) {

            if ($video->image && File::exists(public_path($video->image))) {
                File::delete(public_path($video->image));
            }

            $image     = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/video_thumbnails'), $imageName);
            $video->image = 'uploads/video_thumbnails/' . $imageName;
        }

        $video->video_url = $this->convertToEmbedUrl($request->video_url);

        // $video->video_url = $request->video_url;
        $video->is_active = $request->is_active;
        $video->save();

        Toastr::success('Video updated successfully.');
        return redirect()->route('video-gallery.index');
    }

    public function destroy($id)
    {
        $video = VideoGallery::findOrFail($id);

        if ($video->image && File::exists(public_path($video->image))) {
            File::delete(public_path($video->image));
        }

        $video->delete();

        Toastr::success('Video deleted successfully.');
        return redirect()->route('video-gallery.index');
    }
}
