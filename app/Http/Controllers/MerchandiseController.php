<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Merchandise;
use App\Models\Title;
use App\Models\Chatroom;
use App\Models\Reply;
use Cloudinary;

class Merchandisecontroller extends Controller
{
    public function index(Merchandise $merchandise)
    {
        return view('merchandises/index')->with(['merchandises' => $merchandise->get()]);
    }
    
    public function show(Merchandise $merchandise)
    {
        return view('merchandises/show')->with(['merchandise' => $merchandise, 'replies' => $merchandise->replies]);
    }
    
    public function create(Title $title)
    {
        return view('merchandises/create')->with(['titles' => $title->get()]);
    }
    
    public function store(Request $request, Merchandise $merchandise)
    {
        $images = $request->file('image');
        $input = $request['merchandise'];
        $merchandise->fill($input);
        $merchandise['user_id'] = Auth::id();
        if($images != null){
            for($i=0; $i<count($images) || $i<6; $i++){
                $merchandise['image_url'.($i+1)] = Cloudinary::upload($images[$i]->getRealPath())->getSecurePath();
            }
        }
        $merchandise->save();
        return redirect('/merchandises/' . $merchandise->id);
    }
    
    public function delete(Merchandise $merchandise)
    {
        $merchandise->delete();
        return redirect('/');
    }
    
    public function startTransaction(Merchandise $merchandise, Reply $reply, Chatroom $chatroom)
    {
        $merchandise->sold = true;
        $merchandise->save();
        
        $chatroom->user1 = Auth::id();
        $chatroom->user2 = $reply->user_id;
        $chatroom->merchandise_id = $merchandise->id;
        $chatroom->save();
        return redirect('/messages/'.$chatroom->id);
    }
}
