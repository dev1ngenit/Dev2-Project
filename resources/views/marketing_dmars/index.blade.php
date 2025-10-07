<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing DMARs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Marketing DMARs</h1>
    <a href="{{ route('marketing-dmars.create') }}" class="btn btn-primary mb-3">Add New</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Company</th>
                <th>Service</th>
                <th>Activity</th>
                <th>Tentative</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dmars as $dmar)
                <tr>
                    <td>{{ $dmar->id }}</td>
                    <td>{{ $dmar->company }}</td>
                    <td>{{ $dmar->service }}</td>
                    <td>{{ $dmar->activity }}</td>
                    <td>{{ $dmar->tentative }}</td>
                    <td>
                        <a href="{{ route('marketing-dmars.show', $dmar->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('marketing-dmars.edit', $dmar->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('marketing-dmars.destroy', $dmar->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $dmars->links() }}
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
