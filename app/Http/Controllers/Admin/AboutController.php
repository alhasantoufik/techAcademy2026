<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\UpdateAboutRequest;
use Intervention\Image\Laravel\Facades\Image;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.layouts.pages.about.index', compact('about'));
    }


    public function update(UpdateAboutRequest $request)
    {
        $about = About::first();

        // About Image
        if ($request->hasFile('image')) {
            if ($about->image && file_exists(public_path($about->image))) {
                unlink(public_path($about->image));
            }
            $about->image = $this->uploadImage($request->file('image'), 'about_image');
        }

        // Mission Image
        if ($request->hasFile('missionImage')) {
            if ($about->missionImage && file_exists(public_path($about->missionImage))) {
                unlink(public_path($about->missionImage));
            }
            $about->missionImage = $this->uploadImage($request->file('missionImage'), 'mission_image');
        }

        // Vission Image
        if ($request->hasFile('vissionImage')) {
            if ($about->vissionImage && file_exists(public_path($about->vissionImage))) {
                unlink(public_path($about->vission_image));
            }
            $about->vissionImage = $this->uploadImage($request->file('vissionImage'), 'vission_image');
        }

        $about->update([
            'about_title' => $request->about_title,
            'description' => $request->description,
            'mission'     => $request->mission,
            'vission'     => $request->vission,
            'help_number' => $request->help_number,
            'image'       => $about->image,
            'missionImage' => $about->missionImage,
            'vissionImage' => $about->vissionImage,
        ]);

        Toastr::success('About updated successfully.');
        return redirect()->back();
    }



    private function aboutImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = Image::read($request->file('image'));
            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $destinationPath = public_path('uploads/about_image/');
            $image->save($destinationPath . $imageName);

            return 'uploads/about_image/' . $imageName;
        }
        return null;
    }

    private function uploadImage($file, $folder)
    {
        $image = Image::read($file);
        $imageName = time() . '-' . $file->getClientOriginalName();
        $path = 'uploads/about/' . $folder . '/';

        if (!file_exists(public_path($path))) {
            mkdir(public_path($path), 0755, true);
        }

        $image->save(public_path($path . $imageName));

        return $path . $imageName;
    }
}
