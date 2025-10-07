<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing DMAR Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Marketing DMAR Details</h1>

    <table class="table table-bordered">
        <tr><th>Company</th><td>{{ $marketing_dmar->company }}</td></tr>
        <tr><th>Service</th><td>{{ $marketing_dmar->service }}</td></tr>
        <tr><th>Activity</th><td>{{ $marketing_dmar->activity }}</td></tr>
        <tr><th>Tentative</th><td>{{ $marketing_dmar->tentative }}</td></tr>
        <tr><th>Comments</th><td>{{ $marketing_dmar->comments }}</td></tr>
        <tr><th>Current Status</th><td>{{ $marketing_dmar->current_status }}</td></tr>
        <tr><th>Client Type</th><td>{{ $marketing_dmar->client_type }}</td></tr>
        <tr><th>Sector</th><td>{{ $marketing_dmar->sector }}</td></tr>
        <tr><th>Sub Sector</th><td>{{ $marketing_dmar->sub_sector }}</td></tr>
        <tr><th>Area</th><td>{{ $marketing_dmar->area }}</td></tr>
    </table>

    <a href="{{ route('marketing-dmars.index') }}" class="btn btn-secondary">Back</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
