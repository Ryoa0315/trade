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
            {{ $merchandise->title }}
        </h1>
        <div class="content">
            <div class="content__merchandise">
                <h3>商品の説明</h3>
                <p>{{ $merchandise->body }}</p>    
            </div>
        </div>
        <div class="replies">
            @foreach ($replies as $reply)
            <div class='replies'>
                <p>{{ $reply->body}}</p>
                @if($reply->user_id != Auth::id() && $merchandise->user_id ==Auth::id())
                    <form action="/merchandises/{{ $merchandise->id }}/{{ $reply->id}}" id="form_{{ $reply->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <button type="button"onclick="putReply({{ $reply->id}})">取引開始</button>
                    </form>
                @endif
            </div>
            @endforeach
        </div>
        <form action="/replies/{{ $merchandise->id }}" method="POST" enctype="multipart/form-data">
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
        <script>
            function putReply(id) {
                'use strict'
                
                if(confirm('この人と取引を開始しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>
</x-app-layout>