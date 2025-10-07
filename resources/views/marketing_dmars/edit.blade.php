<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Marketing DMAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Edit Marketing DMAR</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('marketing-dmars.update', $marketing_dmar->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Year</label>
            <input type="number" name="year" class="form-control" value="{{ $marketing_dmar->year }}">
        </div>

        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" class="form-control" value="{{ $marketing_dmar->date }}">
        </div>

        <div class="mb-3">
            <label>Month</label>
            <input type="text" name="month" class="form-control" value="{{ $marketing_dmar->month }}">
        </div>

        <div class="mb-3">
            <label>Activity</label>
            <input type="text" name="activity" class="form-control" value="{{ $marketing_dmar->activity }}">
        </div>

        <div class="mb-3">
            <label>Company</label>
            <input type="text" name="company" class="form-control" value="{{ $marketing_dmar->company }}">
        </div>

        <div class="mb-3">
            <label>Service</label>
            <input type="text" name="service" class="form-control" value="{{ $marketing_dmar->service }}">
        </div>

        <div class="mb-3">
            <label>Products</label>
            <input type="text" name="products" class="form-control" value="{{ $marketing_dmar->products }}">
        </div>

        <div class="mb-3">
            <label>Tentative</label>
            <input type="number" step="0.01" name="tentative" class="form-control" value="{{ $marketing_dmar->tentative }}">
        </div>

        <div class="mb-3">
            <label>Comments</label>
            <textarea name="comments" class="form-control">{{ $marketing_dmar->comments }}</textarea>
        </div>

        <div class="mb-3">
            <label>Action on Fail</label>
            <input type="text" name="action_on_fail" class="form-control" value="{{ $marketing_dmar->action_on_fail }}">
        </div>

        <div class="mb-3">
            <label>Current Status</label>
            <input type="text" name="current_status" class="form-control" value="{{ $marketing_dmar->current_status }}">
        </div>

        <div class="mb-3">
            <label>Client Type</label>
            <input type="text" name="client_type" class="form-control" value="{{ $marketing_dmar->client_type }}">
        </div>

        <div class="mb-3">
            <label>Sector</label>
            <input type="text" name="sector" class="form-control" value="{{ $marketing_dmar->sector }}">
        </div>

        <div class="mb-3">
            <label>Sub Sector</label>
            <input type="text" name="sub_sector" class="form-control" value="{{ $marketing_dmar->sub_sector }}">
        </div>

        <div class="mb-3">
            <label>Area</label>
            <textarea name="area" class="form-control">{{ $marketing_dmar->area }}</textarea>
        </div>

        <!-- Contact Fields -->
        <div class="mb-3">
            <label>Contact Name</label>
            <input type="text" name="contact_name" class="form-control" value="{{ $marketing_dmar->contact_name }}">
        </div>

        <div class="mb-3">
            <label>Contact Number</label>
            <input type="text" name="contact_number" class="form-control" value="{{ $marketing_dmar->contact_number }}">
        </div>

        <div class="mb-3">
            <label>Contact Email</label>
            <input type="email" name="contact_email" class="form-control" value="{{ $marketing_dmar->contact_email }}">
        </div>

        <div class="mb-3">
            <label>Contact Address</label>
            <textarea name="contact_address" class="form-control">{{ $marketing_dmar->contact_address }}</textarea>
        </div>

        <div class="mb-3">
            <label>Contact Website</label>
            <input type="text" name="contact_website" class="form-control" value="{{ $marketing_dmar->contact_website }}">
        </div>

        <div class="mb-3">
            <label>Contact Social</label>
            <textarea name="contact_social" class="form-control">{{ $marketing_dmar->contact_social }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('marketing-dmars.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
