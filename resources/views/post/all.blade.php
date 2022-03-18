@include('components.head')

<div class="container-fluid">
    @foreach ($posts as $post)
    <div class="container-fluid">
        <h2>{{ $post->slug }}</h2>
        <p>author: {{ $post->author }}</p>
        <a href="/post/{{ $post->slug }}">read more</a>
    </div>
        @endforeach
    {{$posts->links()}}
</div>

