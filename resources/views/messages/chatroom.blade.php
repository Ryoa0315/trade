<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Trade</title>
    </head>
    <body>
        <h1>Trade</h1>
            <div class="messages">
            @foreach ($messages as $message)
            <div class='body'>
            <p>{{ $message->body}}</p>
            </div>
            @endforeach
    <form action="/messages/{{ $chatroom->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input class= type="text" name="body" placeholder="Input message." >
            <input type="file" multiple name="image[]"/>
            <input type="submit" value="送信"/>
        </form>
    </body>
</html>
</x-app-layout>