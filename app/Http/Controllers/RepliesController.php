<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reply;
use App\Models\Merchandise;

class RepliesController extends Controller
{
    public function store(Request $request, Merchandise $merchandise, Reply $reply)
    {
        $input = $request['reply'];
        $reply->fill($input);
        $reply['user_id'] = Auth::id();
        $reply['merchandise_id'] = $merchandise->id;
        $reply->save();
        
        return redirect('/');
    }
}
