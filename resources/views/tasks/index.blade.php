<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="posts/{{$post->id}}">
                {{ $post->body }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>