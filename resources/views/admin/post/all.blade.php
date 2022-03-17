@foreach ($posts as $post)
    <a href="/post/{{ $post->slug }}"><h2>{{ $post->slug }}</h2></a>
@endforeach
