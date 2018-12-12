<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Constraint;
use Intervention\Image\Facades\Image;
use TCG\Voyager\Facades\Voyager;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('Theme2.my-profile.content.profile')->with('users', auth()->user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->id()],
            'password' => ['sometimes', 'nullable', 'string', 'min:6', 'confirmed'],
        ]);
        $user=auth()->user();
        $input=$request->except('password','password_confirmation');
        if (!$request->filled('password')) {
            $user->fill($input)->save();
            return back()->with('success_message','Profile updated');
        }
        $user->password=bcrypt($request->password);
        $user->fill($input)->save();
        return back()->with('success_message','Profile and password updated');

    }
//    public function upload(Request $request)
//    {
//        $fullFilename = null;
//        $resizeWidth = 1800;
//        $resizeHeight = null;
//        $slug = $request->input('type_slug');
//        $file = $request->file('image');
//
//        $path = $slug.'/'.date('F').date('Y').'/';
//
//        $filename = basename($file->getClientOriginalName(), '.'.$file->getClientOriginalExtension());
//        $filename_counter = 1;
//
//        // Make sure the filename does not exist, if it does make sure to add a number to the end 1, 2, 3, etc...
//        while (Storage::disk(config('voyager.storage.disk'))->exists($path.$filename.'.'.$file->getClientOriginalExtension())) {
//            $filename = basename($file->getClientOriginalName(), '.'.$file->getClientOriginalExtension()).(string) ($filename_counter++);
//        }
//
//        $fullPath = $path.$filename.'.'.$file->getClientOriginalExtension();
//
//        $ext = $file->guessClientExtension();
//
//        if (in_array($ext, ['jpeg', 'jpg', 'png', 'gif'])) {
//            $image = Image::make($file)
//                ->resize($resizeWidth, $resizeHeight, function (Constraint $constraint) {
//                    $constraint->aspectRatio();
//                    $constraint->upsize();
//                })
//                ->encode($file->getClientOriginalExtension(), 75);
//
//            // move uploaded file from temp to uploads directory
//            if (Storage::disk(config('voyager.storage.disk'))->put($fullPath, (string) $image, 'public')) {
//                $status = __('voyager::media.success_uploading');
//                $fullFilename = $fullPath;
//            } else {
//                $status = __('voyager::media.error_uploading');
//            }
//        } else {
//            $status = __('voyager::media.uploading_wrong_type');
//        }
//
//        // echo out script that TinyMCE can handle and update the image in the editor
//        return "<script> parent.helpers.setImageValue('".Voyager::image($fullFilename)."'); </script>";
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
