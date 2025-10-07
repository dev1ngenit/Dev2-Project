<!DOCTYPE html>
<html>
<head>
    <title>Add Marketing Plan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .plan-block { border: 1px solid #ddd; padding: 15px; margin-bottom: 15px; position: relative; }
        .remove-btn { position: absolute; top: 10px; right: 10px; }
    </style>
</head>
<body class="p-4">

<div class="container">
    <h2>Add Marketing Plans <a href="{{ route('marketing-plans.index') }}" class="btn btn-secondary btn-sm float-end">Back</a></h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('marketing-plans.store-multiple') }}" method="POST">
        @csrf

        <div id="plans-container">
            <div class="plan-block">
                <button type="button" class="btn btn-danger btn-sm remove-btn" onclick="removePlan(this)">Remove</button>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>User ID</label>
                        <input type="number" name="plans[0][user_id]" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Year</label>
                        <input type="number" name="plans[0][year]" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Month</label>
                        <input type="text" name="plans[0][month]" class="form-control" placeholder="e.g. January">
                    </div>
                </div>

                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="plans[0][title]" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Marketing Type</label>
                    <select name="plans[0][marketing_type]" class="form-control">
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
                    <select name="plans[0][status]" class="form-control">
                        <option value="">Select Status</option>
                        <option value="pending">Pending</option>
                        <option value="processing">Processing</option>
                        <option value="done">Done</option>
                        <option value="not_done">Not Done</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Date</label>
                    <input type="date" name="plans[0][date]" class="form-control">
                </div>

                <h5>Contact Information</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Contact Name</label>
                        <input type="text" name="plans[0][contact_name]" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Contact Number</label>
                        <input type="text" name="plans[0][contact_number]" class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label>Contact Email</label>
                    <input type="email" name="plans[0][contact_email]" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Contact Address</label>
                    <textarea name="plans[0][contact_address]" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label>Contact Website</label>
                    <input type="text" name="plans[0][contact_website]" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Contact Social</label>
                    <input type="text" name="plans[0][contact_social]" class="form-control" placeholder="e.g. Facebook, LinkedIn">
                </div>

                <div class="mb-3">
                    <label>Notes</label>
                    <textarea name="plans[0][notes]" class="form-control"></textarea>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-success mb-3" onclick="addNewPlan()">Add New Plan</button>
        <button type="submit" class="btn btn-primary">Save All Plans</button>
    </form>
</div>

<script>
let planIndex = 1;

function addNewPlan() {
    const container = document.getElementById('plans-container');
    const firstPlan = container.querySelector('.plan-block');
    const newPlan = firstPlan.cloneNode(true);

    // Reset values and update input names
    newPlan.querySelectorAll('input, select, textarea').forEach(el => {
        const name = el.name;
        const newName = name.replace(/\d+/, planIndex);
        el.name = newName;
        if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') el.value = '';
        if (el.tagName === 'SELECT') el.selectedIndex = 0;
    });

    container.appendChild(newPlan);
    planIndex++;
}

function removePlan(button) {
    const container = document.getElementById('plans-container');
    if (container.querySelectorAll('.plan-block').length > 1) {
        button.parentElement.remove();
    } else {
        alert('At least one plan is required.');
    }
}
</script>

</body>
</html>
