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
            <label>Company</label>
            <input type="text" name="company" class="form-control" value="{{ $marketing_dmar->company }}">
        </div>

        <div class="mb-3">
            <label>Service</label>
            <input type="text" name="service" class="form-control" value="{{ $marketing_dmar->service }}">
        </div>

        <div class="mb-3">
            <label>Activity</label>
            <input type="text" name="activity" class="form-control" value="{{ $marketing_dmar->activity }}">
        </div>

        <div class="mb-3">
            <label>Tentative</label>
            <input type="number" name="tentative" class="form-control" value="{{ $marketing_dmar->tentative }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('marketing-dmars.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
