<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use App\Models\User;
use App\Models\Chatroom;
use Cloudinary;



class MessageController extends Controller
{
    public function index(Message $message)
    {
        //自分の所属チャットルーム表示
        $chatrooms = Chatroom::where('user1', Auth::id())->orWhere('user2', Auth::id())->get();
        return view('messages/index')->with(['chatrooms' => $chatrooms]);
    }
    
    public function show(Chatroom $chatroom, Message $message)
    {
        //メッセージ表示
        $messages = Message::where('chatroom_id', $chatroom->id)->get();
        return view('messages/chatroom')->with(['chatroom' => $chatroom, 'messages' => $messages, 'user1'=>$chatroom->user_1, 'user2'=>$chatroom->user_2]);
    }
    
    public function store(Request $request,Chatroom $chatroom, Message $message)
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
