<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Merchandises</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="name">
            {{ $merchandises->title }}
        </h1>
        <div class="content">
            <div class="content__merchandise">
                <h3>商品の説明</h3>
                <p>{{ $merchandises->body }}</p>    
            </div>
        </div>
        <div class="replies">
            @foreach ($replies as $reply)
            <div class='replies'>
            <p>{{ $reply->body}}</p>
            </div>
            @endforeach
        </div>
        <form action="/replies/{{ $merchandises->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="body">
                <h3>返信</h3>
                <textarea name="reply[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <input type="submit" value="返信"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
</x-app-layout>