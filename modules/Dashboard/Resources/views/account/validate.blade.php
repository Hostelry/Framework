<form method="POST" action="{{route('dashboard.account.verify', compact('owner'))}}">
    @csrf
<input type="text" name="activation_code">
    <button type="submit">Activate Account</button>
</form>

<form method="POST" action="{{route('dashboard.email.resend', compact('owner'))}}">
    @csrf
    <button> Resend Confirmation Email</button>
</form>
