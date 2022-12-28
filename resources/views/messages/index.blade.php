<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Trade</title>
    </head>
    <body>
        @foreach($chatrooms as $chatroom)  
            @if(Auth::id()==$chatroom->user1)
                <h2><a href="/messages/{{$chatroom->id}}">{{ $chatroom->user_2->name}}</a></h2>
            @else
                <h2><a href="/messages/{{$chatroom->id}}">{{ $chatroom->user_2->name}}</a></h2>
            @endif
            <h3>{{ $chatroom->merchandise->name}}</h3>
        @endforeach
    </body>
</html>
</x-app-layout>