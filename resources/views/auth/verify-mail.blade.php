<form action="{{ route('password.update') }}" method="POST">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">
    <input type="email" name="email" id="email">
    <input type="password" name=password" id=password">
    <input type="password" name="password_confiramtion" id="password_confiramtion">
    <button type="submit">save change</button>
</form>
