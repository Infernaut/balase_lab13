<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card">
        <!-- contents -->
        <div class="card-body">
            <form method="POST" action="/login">
                @csrf
                <title>Log-in</title>
                <h1 class="text-center">Log-in</h1>
                <input class="form-control mb-3" name="email" type="email" placeholder="Email" required>
                <input class="form-control mb-3" name="password" type="password" placeholder="Password" required>
                <button class="btn btn-primary w-100" type="submit">Login</button>
                <p class="text-center mt-3">Don't have an account? <a href="/register">Register</a></p>
            </form>
        </div>
    </div>
</div>