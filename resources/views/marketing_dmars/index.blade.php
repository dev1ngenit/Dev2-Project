<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing DMARs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            color: #343a40;
        }
        table {
            font-size: 0.85rem;
        }
        th, td {
            vertical-align: middle;
        }
        .table-responsive {
            overflow-x: auto;
        }
        .btn {
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Marketing DMARs</h1>
        <a href="{{ route('marketing-dmars.create') }}" class="btn btn-success">Add New</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Year</th>
                    <th>Date</th>
                    <th>Month</th>
                    <th>Activity</th>
                    <th>Company</th>
                    <th>Service</th>
                    <th>Products</th>
                    <th>Tentative</th>
                    <th>Comments</th>
                    <th>Action on Fail</th>
                    <th>Current Status</th>
                    <th>Client Type</th>
                    <th>Sector</th>
                    <th>Sub Sector</th>
                    <th>Area</th>
                    <th>Contact Name</th>
                    <th>Contact Number</th>
                    <th>Contact Email</th>
                    <th>Contact Address</th>
                    <th>Contact Website</th>
                    <th>Contact Social</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dmars as $dmar)
                    <tr class="text-center">
                        <td>{{ $dmar->id }}</td>
                        <td>{{ $dmar->year }}</td>
                        <td>{{ $dmar->date }}</td>
                        <td>{{ $dmar->month }}</td>
                        <td>{{ $dmar->activity }}</td>
                        <td>{{ $dmar->company }}</td>
                        <td>{{ $dmar->service }}</td>
                        <td>{{ $dmar->products }}</td>
                        <td>{{ $dmar->tentative }}</td>
                        <td>{{ $dmar->comments }}</td>
                        <td>{{ $dmar->action_on_fail }}</td>
                        <td>{{ $dmar->current_status }}</td>
                        <td>{{ $dmar->client_type }}</td>
                        <td>{{ $dmar->sector }}</td>
                        <td>{{ $dmar->sub_sector }}</td>
                        <td>{{ $dmar->area }}</td>
                        <td>{{ $dmar->contact_name }}</td>
                        <td>{{ $dmar->contact_number }}</td>
                        <td>{{ $dmar->contact_email }}</td>
                        <td>{{ $dmar->contact_address }}</td>
                        <td>{{ $dmar->contact_website }}</td>
                        <td>{{ $dmar->contact_social }}</td>
                        <td class="d-flex justify-content-center gap-1">
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
    </div>

    <div class="d-flex justify-content-center mt-3">
        {{ $dmars->links() }}
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
