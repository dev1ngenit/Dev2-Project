<!DOCTYPE html>
<html>
<head>
    <title>View Marketing Plan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h2>Marketing Plan Details <a href="{{ route('marketing-plans.index') }}" class="btn btn-secondary btn-sm float-end">Back</a></h2>

    <table class="table table-bordered mt-3">
        <tr><th>ID</th><td>{{ $marketingPlan->id }}</td></tr>
        <tr><th>Title</th><td>{{ $marketingPlan->title }}</td></tr>
        <tr><th>Type</th><td>{{ $marketingPlan->marketing_type }}</td></tr>
        <tr><th>Status</th><td>{{ $marketingPlan->status }}</td></tr>
        <tr><th>Date</th><td>{{ $marketingPlan->date }}</td></tr>
        <tr><th>Notes</th><td>{{ $marketingPlan->notes }}</td></tr>
    </table>
</div>

</body>
</html>
