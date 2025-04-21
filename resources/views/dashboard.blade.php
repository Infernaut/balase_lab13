<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card">
        <div class="card-body text-center">
            <h1>Welcome, {{ auth()->user()->name }}!</h1>
            <p>You are logged in as {{ auth()->user()->email }}</p>
            <form method="GET" action="{{ route('posts.index') }}">
                <button type="submit" class="btn btn-primary">Go to posts</button>
            </form>

            <form method="POST" action="/logout" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>
</div>