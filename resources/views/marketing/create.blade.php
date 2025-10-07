<!DOCTYPE html>
<html>
<head>
    <title>Add Marketing Plan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h2>Add Marketing Plan <a href="{{ route('marketing-plans.index') }}" class="btn btn-secondary btn-sm float-end">Back</a></h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('marketing-plans.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>User ID</label>
                <input type="number" name="user_id" class="form-control">
            </div>
            <div class="col-md-4 mb-3">
                <label>Year</label>
                <input type="number" name="year" class="form-control">
            </div>
            <div class="col-md-4 mb-3">
                <label>Month</label>
                <input type="text" name="month" class="form-control" placeholder="e.g. January">
            </div>
        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Marketing Type</label>
            <select name="marketing_type" class="form-control">
                <option value="">Select Type</option>
                <option value="site_visit">Site Visit</option>
                <option value="client_visit">Client Visit</option>
                <option value="telephone">Telephone</option>
                <option value="email">Email</option>
                <option value="social">Social</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="">Select Status</option>
                <option value="pending">Pending</option>
                <option value="processing">Processing</option>
                <option value="done">Done</option>
                <option value="not_done">Not Done</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" class="form-control">
        </div>

        <h5>Contact Information</h5>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Contact Name</label>
                <input type="text" name="contact_name" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label>Contact Number</label>
                <input type="text" name="contact_number" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label>Contact Email</label>
            <input type="email" name="contact_email" class="form-control">
        </div>

        <div class="mb-3">
            <label>Contact Address</label>
            <textarea name="contact_address" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Contact Website</label>
            <input type="text" name="contact_website" class="form-control">
        </div>

        <div class="mb-3">
            <label>Contact Social</label>
            <input type="text" name="contact_social" class="form-control" placeholder="e.g. Facebook, LinkedIn">
        </div>

        <div class="mb-3">
            <label>Notes</label>
            <textarea name="notes" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">Save</button>
    </form>
</div>

</body>
</html>
