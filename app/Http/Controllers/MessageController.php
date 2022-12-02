<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use App\Models\User;
use Cloudinary;



class MessageController extends Controller
{
    public function index(Message $message)
    {
        $tomessages = Auth::user()->toMessages;
        $frommessages = Auth::user()->fromMessages;
        $messages = collect($tomessages)->merge($frommessages)->sortByDesc('create_at');
        return view('messages/index')->with(['messages' => $messages]);
    }
    
    public function show(User $me, User $you)
    {
        $messages = Message::where(function ($query) use ($me, $you) {
            $query->where('from', $me->id)->Where('to', $you->id);
        })->orwhere(function ($query) use ($me, $you) {
            $query->where('to', $me->id)->Where('from', $you->id);
        })->get();
        return view('messages/chatroom')->with(['messages' => $messages, 'me'=>$me, 'you'=>$you]);
    }
    
    public function store(Request $request, Message $message)
    {
        $images = $request->file('image');
        $input = $request['message'];
        if($images != null){
            for($i=0; $i<count($images) || $i<6; $i++){
                $message['image_url'.($i+1)] = Cloudinary::upload($images[$i]->getRealPath())->getSecurePath();
            }
        }
        $message->save();
        return view('messages/index');
    }
    
}
