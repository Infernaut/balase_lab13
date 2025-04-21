<form method="POST" action="/register">
    @csrf
    <title>Sign-up</title>
    <h1>Sign-up</h1>
    <input name="name" placeholder="Name" required>
    <br><br>
    <input name="email" type="email" placeholder="Email" required>
    <br><br>
    <input name="password" type="password" placeholder="Password" required>
    <br><br>
    <input name="password_confirmation" type="password" placeholder="Confirm Password" required>
    <br><br>
    <button type="submit">Register</button>
</form>

<p>Already have an account? <a href="/login">Login</a></p>