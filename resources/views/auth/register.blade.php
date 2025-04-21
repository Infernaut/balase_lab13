<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card">
        <div class="card-body text-center">
            <form method="POST" action="/register">
                @csrf
                <title>Sign-up</title>
                <h1>Sign-up</h1>
                <input class="form-control my-2" name="name" placeholder="Username" required>
                <input class="form-control my-2" name="email" type="email" placeholder="Email" required>
                <input class="form-control my-2" name="password" type="password" placeholder="Password" minlength="6" required>
                <input class="form-control my-2" name="password_confirmation" type="password" placeholder="Confirm Password" minlength="6" required>
                <button class="btn btn-primary w-100" type="submit">Register</button>
            </form>
            <p class="text-center">Already have an account? <a href="/login">Login</a></p>
        </div>
    </div>
</div>