<h2>Register</h2>
<form action="register" method="post">
        @csrf
        <div>
            <label for="name">username</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password_conf">password</label>
            <input type="password" name="password_confirmation" id="password_conf">
        </div>
        <button>register</button>
</form>
