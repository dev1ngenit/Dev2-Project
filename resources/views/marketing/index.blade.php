<!DOCTYPE html>
<html>
<head>
    <title>Marketing Plans</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h2 class="mb-3">
        Marketing Plans
        <a href="{{ route('marketing-plans.create') }}" class="btn btn-primary btn-sm float-end">Add New</a>
    </h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Type</th>
                <th>Status</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($plans as $plan)
                <tr>
                    <td>{{ $plan->id }}</td>
                    <td>{{ $plan->title }}</td>
                    <td>{{ $plan->marketing_type }}</td>
                    <td>{{ $plan->status }}</td>
                    <td>{{ $plan->date }}</td>
                    <td>
                        <a href="{{ route('marketing-plans.show', $plan->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('marketing-plans.edit', $plan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('marketing-plans.destroy', $plan->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this plan?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $plans->links() }}
    </div>
</div>

</body>
</html>
