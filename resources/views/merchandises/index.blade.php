<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Trade</h1>
        <div class='merchandises'>
            <a href='/merchandises/create'>出品</a>
            @foreach ($merchandises as $merchandise)
                <div class'merchandise'>
                    <h2 class='name'>
                        <a href="/merchandises/{{ $merchandise->id }}">{{ $merchandise->name}}</a>
                    </h2>
                    <p class='request'>{{ $merchandise->request }}</p>
                    <p class='body'>{{ $merchandise->body }}</p>
                    <form action="/merchandises/{{ $merchandise->id }}" id="form_{{ $merchandise->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteMerchandise({{ $merchandise->id }})">削除</button>
                    </form>
                </div>
            @endforeach    
        </div>
    </body>
    <script>
    function deleteMerchandise(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>
</html>
</x-app-layout>