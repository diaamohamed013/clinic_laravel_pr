<?php

namespace App\Helpers;

use App\Http\Requests\admin\MajorRequest;
// use Illuminate\Http\Request;

class FileHelper {
    public static function get_file_url(?string $path=null){
        return ($path) ? asset($path) : asset('site/uploads/default-imagepng');
    }

    // public static function get_image_file(MajorRequest $request,$data)
    // {
    //     dd($request);
    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         $filename = $file->storeAs('majors', time() . '.' . $file->getClientOriginalExtension(), 'public');
    //         $data['image'] = 'storage/' . $filename;
    //     }
    //     return $data;
    // }

}
