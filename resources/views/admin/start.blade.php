@include('components.head')
<body>
    <div>
        <h2>admin panel</h2>
        <p>welcome {{ $user->name }}</p>
    </div>
    <div><!-- sidebar -->
        <a href="/new_post">new post!</a>
    </div>

</body>

