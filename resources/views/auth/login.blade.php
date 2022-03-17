<h2>login</h2>
<form action="login" method="post">
        @csrf
        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </div>
        <button>login</button>
</form>
