<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>
<br>
    <h1>Blog</h1>

    @foreach($posts as $post)
        <h2>{{ $post->title }} <i>({{ $post->created_at }})</i></h2>
        <p>{{ $post->content }}</p>

        <h3>Comments</h3>
        @foreach($post->comments as $comment)
            <b>Name: </b> {{ $comment->name }}<br/>
            <b>Comment: </b> {{ $comment->comment }}</br>
        @endforeach
        <hr/>
    @endforeach

</body>
</html>
