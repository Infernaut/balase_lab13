<form method="POST" action="/login">
    @csrf
    <title>Log-in</title>
    <h1>Log-in</h1>
    <input name="email" type="email" placeholder="Email" required>
    <br><br>
    <input name="password" type="password" placeholder="Password" required>
    <br><br>
    <button type="submit">Login</button>


</form>

<p>Don't have an account? <a href="/register">Register</a></p>