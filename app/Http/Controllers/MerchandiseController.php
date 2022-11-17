<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Merchandise;
use App\Models\Title;
use Cloudinary;

class Merchandisecontroller extends Controller
{
    public function index(Merchandise $merchandise)
    {
        return view('merchandises/index')->with(['merchandises' => $merchandise->get()]);
    }
    
    public function show(Merchandise $merchandise)
    {
        return view('merchandises/show')->with(['merchandises' => $merchandise]);
    }
    
    public function create(Title $title)
    {
        return view('merchandises/create')->with(['titles' => $title->get()]);
    }
    
    public function store(Request $request, Merchandise $merchandise)
    {
        $input = $request['merchandise'];
        $merchandise->fill($input);
        $merchandise['image_url1'] = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $merchandise['user_id'] = Auth::id();
        $merchandise->save();
        return redirect('/merchandises/' . $merchandise->id);
    }
    
    public function delete(Merchandise $merchandise)
    {
        $merchandise->delete();
        return redirect('/');
    }
}
