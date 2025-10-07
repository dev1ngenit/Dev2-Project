<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenders</title>
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container bg-white p-4 rounded shadow-sm">

    <div class="d-flex justify-content-between mb-3">
        <h3>Tenders</h3>
        <a href="{{ route('tenders.create') }}" class="btn btn-success">Create Tender</a>
    </div>

    {{-- Success message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tenders Table --}}
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>Code</th>
                <th>Title</th>
                <th>Client</th>
                <th>Last Date</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tenders as $t)
                <tr>
                    <td>{{ $t->tender_code }}</td>
                    <td>{{ $t->title }}</td>
                    <td>{{ $t->client_name }}</td>
                    <td>{{ $t->last_date_of_submission ? $t->last_date_of_submission->format('Y-m-d') : '-' }}</td>
                    <td>{{ $t->tender_status }}</td>
                    <td class="text-center">
                        <a href="{{ route('tenders.edit', $t) }}" class="btn btn-sm btn-primary">Edit</a>

                        <form action="{{ route('tenders.destroy', $t) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete this tender?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center">No tenders found.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {{ $tenders->links() }}
    </div>

</div>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
