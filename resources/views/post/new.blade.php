<div style="display: grid; grid-template-columns:1fr 1fr; height:100vh; width:100vw;">
    <form action="/new_post" method="post">
        @csrf
        <textarea name="body" id="input" style="height: 100%; width:100%"></textarea>
        <button>submit</button>
    </form>
    <div id="preview">

    </div>
</div>
