@include('components.head')
<div style="display: grid; grid-template-columns:1fr 1fr; height:100vh; width:100vw; max-width:100vw;">
    <form action="/new_post" method="post">
        @csrf
        <textarea name="body" id="input" style="height: 100%; width:100%"></textarea>
        <button>submit</button>
    </form>
    <div id="preview">

    </div>
</div>
@production
@else
<script type="module" src="http://localhost:3000/@vite/client"></script>
<script type="module" src="http://localhost:3000/resources/scripts/main.js"></script>
@endproduction
