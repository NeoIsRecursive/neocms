@include('components.head')

<div class="container-fluid">
    {!! $post['body'] !!}
    <p>by {{ $post['author']->name }}</p>
</div>
