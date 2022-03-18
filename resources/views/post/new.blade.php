<form action="/new_post" method="post">
    @csrf
    <input type="text" name="slug">
    <textarea name="body" id="text"></textarea>
    <button>submit</button>
</form>
