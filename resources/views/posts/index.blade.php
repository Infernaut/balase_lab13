<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Posts</title>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card">
        <div class="card-body text-center">
            <h1>All Posts</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->post_id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('posts.edit', $post->post_id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('posts.destroy', $post->post_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/dashboard" class="btn btn-primary mb-3"> Go back to dashboard</a>
        </div>
    </div>

</body>

</html>