<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tender Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <h3>Tender Details</h3>
        <a href="{{ route('tenders.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Code</th>
            <td>{{ $tender->tender_code }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $tender->title }}</td>
        </tr>
        <tr>
            <th>Responsible Person</th>
            <td>{{ optional($tender->responsible_person)->name ?? optional($tender->responsible_person)->username ?? optional($tender->responsible_person)->email ?? '-' }}</td>
        </tr>
        <tr>
            <th>Client Name</th>
            <td>{{ $tender->client_name ?? '-' }}</td>
        </tr>
        <tr>
            <th>Last Date of Submission</th>
            <td>{{ $tender->last_date_of_submission ? $tender->last_date_of_submission->format('Y-m-d') : '-' }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $tender->tender_status ?? '-' }}</td>
        </tr>
        <tr>
            <th>Action</th>
            <td>{{ $tender->action ?? '-' }}</td>
        </tr>
        <tr>
            <th>Participation</th>
            <td>{{ $tender->participate ?? '-' }}</td>
        </tr>
        <tr>
            <th>Submitted</th>
            <td>{{ $tender->submitted ?? '-' }}</td>
        </tr>
        <tr>
            <th>Schedule Value (Tk)</th>
            <td>{{ $tender->schedule_value_tk ?? '-' }}</td>
        </tr>
        <tr>
            <th>Security</th>
            <td>{{ $tender->security ?? '-' }}</td>
        </tr>
        <tr>
            <th>Comments by Manager</th>
            <td>{{ $tender->comments_by_manager ?? '-' }}</td>
        </tr>
        <tr>
            <th>Comments by MD</th>
            <td>{{ $tender->comments_by_md ?? '-' }}</td>
        </tr>
        <tr>
            <th>General Comments</th>
            <td>{{ $tender->general_comments ?? '-' }}</td>
        </tr>
    </table>

    <div class="mt-3">
        <a href="{{ route('tenders.edit', $tender) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('tenders.destroy', $tender) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete this tender?');">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
</body>
</html>
