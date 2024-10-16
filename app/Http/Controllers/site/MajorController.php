<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function __invoke(Request $request)
    {
        $majors = Major::get();
        return view('site.pages.majors', compact('majors'));
    }
}
