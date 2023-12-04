<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
</head>
<body>
    <h1>List of Blog Posts</h1>

    @foreach ($posts as $post)
        <p><a href="{{ url('/posts/' . $post->id) }}">{{ $post->title }}</a></p>
    @endforeach
</body>
</html>
