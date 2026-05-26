<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">Employee Management System</span>
    </div>
</nav>

<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h2>Employee List</h2>

        <a href="/employee/create" class="btn btn-success">
            Add Employee
        </a>
    </div>

    <table class="table table-bordered table-striped shadow">

        <thead class="table-dark">
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach($employees as $emp): ?>

        <tr>
            <td><?= $emp['employee_id']; ?></td>
            <td><?= $emp['name']; ?></td>
            <td><?= $emp['email']; ?></td>
            <td><?= $emp['department']; ?></td>

            <td>
                <?php if($emp['status'] == 'Active'): ?>
                    <span class="badge bg-success">Active</span>
                <?php else: ?>
                    <span class="badge bg-danger">Inactive</span>
                <?php endif; ?>
            </td>
        </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

    <a href="/" class="btn btn-primary">
        Back to Dashboard
    </a>

</div>

</body>
</html>
