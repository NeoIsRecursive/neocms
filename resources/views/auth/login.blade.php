@include('components.head')
<form action="login" method="post" class="p-3">
    <h2>login</h2>
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button class="btn btn-primary">login</button>
</form>
