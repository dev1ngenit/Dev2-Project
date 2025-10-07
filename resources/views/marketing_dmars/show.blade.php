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

    <table class="table table-bordered table-striped">
        <tr><th>ID</th><td>{{ $marketing_dmar->id }}</td></tr>
        <tr><th>Year</th><td>{{ $marketing_dmar->year }}</td></tr>
        <tr><th>Date</th><td>{{ $marketing_dmar->date }}</td></tr>
        <tr><th>Month</th><td>{{ $marketing_dmar->month }}</td></tr>
        <tr><th>Activity</th><td>{{ $marketing_dmar->activity }}</td></tr>
        <tr><th>Company</th><td>{{ $marketing_dmar->company }}</td></tr>
        <tr><th>Service</th><td>{{ $marketing_dmar->service }}</td></tr>
        <tr><th>Products</th><td>{{ $marketing_dmar->products }}</td></tr>
        <tr><th>Tentative</th><td>{{ $marketing_dmar->tentative }}</td></tr>
        <tr><th>Comments</th><td>{{ $marketing_dmar->comments }}</td></tr>
        <tr><th>Action on Fail</th><td>{{ $marketing_dmar->action_on_fail }}</td></tr>
        <tr><th>Current Status</th><td>{{ $marketing_dmar->current_status }}</td></tr>
        <tr><th>Client Type</th><td>{{ $marketing_dmar->client_type }}</td></tr>
        <tr><th>Sector</th><td>{{ $marketing_dmar->sector }}</td></tr>
        <tr><th>Sub Sector</th><td>{{ $marketing_dmar->sub_sector }}</td></tr>
        <tr><th>Area</th><td>{{ $marketing_dmar->area }}</td></tr>

        <!-- Contact Fields -->
        <tr><th>Contact Name</th><td>{{ $marketing_dmar->contact_name }}</td></tr>
        <tr><th>Contact Number</th><td>{{ $marketing_dmar->contact_number }}</td></tr>
        <tr><th>Contact Email</th><td>{{ $marketing_dmar->contact_email }}</td></tr>
        <tr><th>Contact Address</th><td>{{ $marketing_dmar->contact_address }}</td></tr>
        <tr><th>Contact Website</th><td>{{ $marketing_dmar->contact_website }}</td></tr>
        <tr><th>Contact Social</th><td>{{ $marketing_dmar->contact_social }}</td></tr>

        <tr><th>Created At</th><td>{{ $marketing_dmar->created_at }}</td></tr>
        <tr><th>Updated At</th><td>{{ $marketing_dmar->updated_at }}</td></tr>
    </table>

    <a href="{{ route('marketing-dmars.index') }}" class="btn btn-secondary">Back</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
