<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Marketing Plan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h2>
        Edit Marketing Plan
        <a href="{{ route('marketing-plans.index') }}" class="btn btn-secondary btn-sm float-end">Back</a>
    </h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('marketing-plans.update', $marketingPlan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $marketingPlan->title) }}">
        </div>

        <!-- Marketing Type -->
        <div class="mb-3">
            <label for="marketing_type" class="form-label">Marketing Type</label>
            <select name="marketing_type" id="marketing_type" class="form-control">
                <option value="">Select Type</option>
                <option value="site_visit" {{ $marketingPlan->marketing_type == 'site_visit' ? 'selected' : '' }}>Site Visit</option>
                <option value="client_visit" {{ $marketingPlan->marketing_type == 'client_visit' ? 'selected' : '' }}>Client Visit</option>
                <option value="telephone" {{ $marketingPlan->marketing_type == 'telephone' ? 'selected' : '' }}>Telephone</option>
                <option value="email" {{ $marketingPlan->marketing_type == 'email' ? 'selected' : '' }}>Email</option>
                <option value="social" {{ $marketingPlan->marketing_type == 'social' ? 'selected' : '' }}>Social</option>
            </select>
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="">Select Status</option>
                <option value="pending" {{ $marketingPlan->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="processing" {{ $marketingPlan->status == 'processing' ? 'selected' : '' }}>Processing</option>
                <option value="done" {{ $marketingPlan->status == 'done' ? 'selected' : '' }}>Done</option>
                <option value="not_done" {{ $marketingPlan->status == 'not_done' ? 'selected' : '' }}>Not Done</option>
            </select>
        </div>

        <!-- Year -->
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" name="year" id="year" class="form-control" value="{{ old('year', $marketingPlan->year) }}">
        </div>

        <!-- Month -->
        <div class="mb-3">
            <label for="month" class="form-label">Month</label>
            <input type="text" name="month" id="month" class="form-control" value="{{ old('month', $marketingPlan->month) }}">
        </div>

        <!-- Date -->
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $marketingPlan->date) }}">
        </div>

        <!-- Contact Info -->
        <div class="mb-3">
            <label for="contact_name" class="form-label">Contact Name</label>
            <input type="text" name="contact_name" id="contact_name" class="form-control" value="{{ old('contact_name', $marketingPlan->contact_name) }}">
        </div>

        <div class="mb-3">
            <label for="contact_number" class="form-label">Contact Number</label>
            <input type="text" name="contact_number" id="contact_number" class="form-control" value="{{ old('contact_number', $marketingPlan->contact_number) }}">
        </div>

        <div class="mb-3">
            <label for="contact_email" class="form-label">Contact Email</label>
            <input type="email" name="contact_email" id="contact_email" class="form-control" value="{{ old('contact_email', $marketingPlan->contact_email) }}">
        </div>

        <div class="mb-3">
            <label for="contact_address" class="form-label">Contact Address</label>
            <textarea name="contact_address" id="contact_address" class="form-control">{{ old('contact_address', $marketingPlan->contact_address) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="contact_website" class="form-label">Contact Website</label>
            <textarea name="contact_website" id="contact_website" class="form-control">{{ old('contact_website', $marketingPlan->contact_website) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="contact_social" class="form-label">Contact Social</label>
            <textarea name="contact_social" id="contact_social" class="form-control">{{ old('contact_social', $marketingPlan->contact_social) }}</textarea>
        </div>

        <!-- Notes -->
        <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <textarea name="notes" id="notes" class="form-control">{{ old('notes', $marketingPlan->notes) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Plan</button>
    </form>
</div>

</body>
</html>
