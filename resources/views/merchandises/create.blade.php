<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Trade</title>
    </head>
    <body>
        <h1>Trade</h1>
        <form action="/merchandises" method="POST" enctype="multipart/form-data">
            @csrf
            <h2>Title</h2>
                <select name="merchandise[title_id]">
                    @foreach($titles as $title)
                    <option value="{{ $title->id }}">{{ $title->name }}</option>
                    @endforeach
                </select>
            <div class="name">
                <h2>商品名</h2>
                <input type="text" name="merchandise[name]" placeholder="タイトル"/>
            </div>
            <div class="request">
                <h2>求める商品</h2>
                <input type="text" name="merchandise[request]">
            </div>
            <div class="body">
                <h2>商品の説明</h2>
                <textarea name="merchandise[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <input type="file" multiple name="image[]"/>
            <input type="submit" value="出品"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
</x-app-layout>