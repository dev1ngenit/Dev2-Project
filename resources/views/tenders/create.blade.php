<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Tender</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <h3>Create Tender</h3>
        <a href="{{ route('tenders.index') }}" class="btn btn-secondary">Back</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('tenders.store') }}" method="POST">
        @csrf
        @include('tenders.form', ['users' => $users])
        <div class="mt-3">
            <button class="btn btn-primary">Create Tender</button>
        </div>
    </form>
</div>
</body>
</html>
