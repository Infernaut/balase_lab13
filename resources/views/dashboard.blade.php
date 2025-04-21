<h1>Welcome, {{ auth()->user()->name }}!</h1>
<p>You are logged in as {{ auth()->user()->email }}</p>
<form method="GET" action="{{ route('posts.index') }}">
    <button type="submit">Go to posts</button>
</form>

<form method="POST" action="/logout">
    @csrf
    <button type="submit">Logout</button>
</form>