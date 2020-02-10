<form action="{{route('dashboard.login')}}" method="POST">
    @csrf
    <input type="text" id="username" name="username" placeholder="email@example.com">
    <input type="password" name="password">
    <button type="submit">Sign In</button>
</form>
